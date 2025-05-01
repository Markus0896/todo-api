Создать задачу
URL: POST /api/tasks

Тело запроса:

json
{
    "title": "Новая задача",
    "description": "Описание задачи",
    "status": "pending"
}
Получить все задачи
URL: GET /api/tasks

Получить одну задачу
URL: GET /api/tasks/{id}

Обновить задачу
URL: PUT /api/tasks/{id}

Тело запроса:

json
{
    "title": "Обновленный заголовок",
    "status": "completed"
}
Удалить задачу
URL: DELETE /api/tasks/{id}
