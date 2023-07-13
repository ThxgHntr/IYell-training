<x-layout>
    <x-slot:title>
        一覧
        </x-slot>
        <div class="d-flex justify-content-center align-content-center flex-wrap" style="height: 70%;">
            <a class="link" href="{{ route('employee.create') }}">新規登録</a>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">社員番号</th>
                        <th scope="col">氏名</th>
                        <th scope="col">部署</th>
                        <th scope="col">性別</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($employees as $employee)
                        <tr>
                            <th scope="row">
                                <a href="{{ route('employee.show', $employee->id) }}" class="link">
                                    {{ $employee->id }}
                                </a>
                            </th>
                            <td>{{ $employee->社員番号 }}</td>
                            <td>{{ $employee->氏名 }}</td>
                            <td>{{ $employee->部署 }}</td>
                            <td>
                                {{ $employee->性別 == 0 ? '女' : '男' }}
                            </td>
                            <td>
                                <a href="{{ route('employee.edit', $employee->id) }}" class="link-warning">編集</a>
                                /
                                <a href="{{ route('employee.delete', $employee->id) }}" class="link-danger">削除</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $employees->links() }}
        </div>
</x-layout>
