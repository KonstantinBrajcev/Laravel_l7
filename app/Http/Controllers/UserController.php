<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $employees = User::all(); // Возвращает всех пользователей
        return view('index', compact('employees'));
    }

    public function get($id)
    {
        return User::find($id); // Возвращает пользователя по id
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|regex:/^[\w\.-]+@([\w-]+\.)+[\w]{2,4}$/',
            'workdata' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validatedData = $validator->validated();
        $user = User::create($validatedData);
        return view('user_form', compact('user'));
        // return redirect()->route('users.index');
    }

    public function contacts()
    {
        $address = 'Беларусь, Гомель, ул. Белицкая, 23-109';
        $post_code = '246043';
        $email = 'kastett@mail.ru';
        $phone = '+375291586850';
        return view('contacts', compact('address', 'post_code', 'email', 'phone'));
    }
    public function create()
    {
        return view('create');
    }
    public function edit($id)
    {
        $employee = User::findOrFail($id); // Получение сотрудника по ID
        return view('edit', compact('employee')); // Передача сотрудника в представление
    }



    public function update(Request $request, $id)
    {
        // Поиск работника по ID и его обновление данных
        $employee = User::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('users', $id)->with('success', 'Данные работника успешно обновлены!');
    }

    public function destroy($id)
    {
        $employee = User::findOrFail($id); // Поиск сотрудника по ID
        $employee->delete(); // Удалите сотрудника
        return redirect()->route('users.index')->with('success', 'Сотрудник успешно удалён.'); // Перенаправление на индекс с сообщением
    }
}
