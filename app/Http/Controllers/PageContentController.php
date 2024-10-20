<?php

namespace App\Http\Controllers;

use App\Models\PageContent;
use Illuminate\Http\Request;

class PageContentController extends Controller
{
    // 1. CREATE - метод для создания новой записи
    public function create()
    {
        return view('partials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'page_name' => 'required|string|max:255',
            'content' => 'required',
        ]);

        // Создаем запись и возвращаем сообщение об успехе
        PageContent::create($validated);

        return redirect()->route('page.index')->with('success', 'Page successfully added');
    }

    // 2. READ - метод для отображения всех записей (индекс)
    public function index(Request $request)
    {
        $pages = PageContent::query();

        // Фильтрация страниц по названию
        if ($keyword = $request->get('keyword')) {
            $pages->where('page_name', 'like', '%' . $keyword . '%');
        }

        // Используем уникальные страницы
        $pages = $pages->get()->unique('id'); // Убираем дубликаты по 'id'

        return view('partials.index', compact('pages'));
    }

    // 3. SHOW - метод для отображения одной записи
    public function show($id)
    {
        $page = PageContent::findOrFail($id);
        return view('partials.show', compact('page'));
    }

    // 4. EDIT & UPDATE - методы для редактирования и обновления записи
    public function edit($id)
    {
        $page = PageContent::findOrFail($id);
        return view('partials.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'page_name' => 'required|string|max:255',
            'content' => 'required',
        ]);

        // Обновляем запись, используя except для исключения полей, которые не должны обновляться
        $page = PageContent::findOrFail($id);
        $page->update($validated);

        return redirect()->route('page.index')->with('success', 'Page successfully updated');
    }

    // 5. DELETE - метод для удаления записи
    public function destroy($id)
    {
        // Используем findOrFail для поиска страницы по id
        $page = PageContent::findOrFail($id);
        $page->delete();

        return redirect()->route('page.index')->with('success', 'Page successfully deleted');
    }
}
