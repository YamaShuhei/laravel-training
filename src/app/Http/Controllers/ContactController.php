<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Services\ContactServiceInterface;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
    * @var ContactServiceInterface
    */
    protected $contactService;

    /**
     * Contactコントローラー内のコンストラクタ
     * @param ContactServiceInterface $contactService
     */
    public function __construct(ContactServiceInterface $contactService){
        $this->contactService = $contactService;
    }
    
    /**
     * 問い合わせ一覧画面用
     * 
     * @param Request $request
     * @return \Illuminate\View\View
     * 
     */
    public function index(Request $request){

        $contacts = $this->contactService->getAll();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * 問い合わせ新規投稿画面用
     * 
     * @param Request $request
     * @return \Illuminate\View\View
     * 
     */
    public function create(Request $request){
        $departments = $this->contactService->getDepartmentNames();
        return view('contacts.create', compact('departments'));
    }

    /**
     * 問い合わせ登録処理
     * 
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * 
     */
    public function store(ContactRequest $request){
        DB::transaction(function () use ($request) {
            $this->contactService->createContact(
                $request->name,
                $request->email,
                $request->content,
                (int)$request->age,
                (int)$request->gender,
                (int)$request->department_id,
            );
        });

        return redirect('contacts');
    }
}