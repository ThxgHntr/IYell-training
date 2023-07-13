<x-layout>
    <x-slot:title>
        新規登録
        </x-slot>
        <div class="d-flex flex-column justify-content-center mx-5 px-5" style="height: 70%;">
            <form method="POST" action="{{ route('employee.update', [$id]) }}" class="mx-5 px-5 mb-3">
                @csrf
                @method('PUT')
                <div class="row mb-2">
                    <label for="empID" class="col-sm-2 col-form-label fw-bold">社員番号</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="empID" value={{ $employee->社員番号 }} />
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="name" class="col-sm-2 col-form-label fw-bold">氏名</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" value={{ $employee->氏名 }} />
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="dept" class="col-sm-2 col-form-label fw-bold">部署</label>
                    <div class="col-sm-8">
                        <select class="form-select" name="dept">
                            <option value="a" @if ($employee->部署 == 'a') selected @endif>a</option>
                            <option value="b" @if ($employee->部署 == 'b') selected @endif>b</option>
                            <option value="c" @if ($employee->部署 == 'c') selected @endif>c</option>
                            <option value="d" @if ($employee->部署 == 'd') selected @endif>d</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="gender" class="col-sm-2 col-form-label fw-bold">性別</label>
                    <div class="col-sm-2 form-check px-5">
                        <input class="form-check-input" type="radio" name="gender" value="0"
                            @if ($employee->性別 == 0) checked @endif>
                        <label class="form-check-label">
                            女
                        </label>
                    </div>
                    <div class="col-sm-2 form-check">
                        <input class="form-check-input" type="radio" name="gender" value="1"
                            @if ($employee->性別 == 1) checked @endif>
                        <label class="form-check-label">
                            男
                        </label>
                    </div>
                </div>
                <input type="submit" name="submit" value="編集" class="btn btn-primary" />
            </form>
            <x-return-link />
        </div>
</x-layout>
