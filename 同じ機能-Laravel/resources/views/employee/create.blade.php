<x-layout>
    <x-slot:title>
        登録
        </x-slot>
        <div class="d-flex flex-column justify-content-center mx-5 px-5" style="height: 70%;">
            <form method="POST" action="{{ route('employee.store') }}" class="mx-5 px-5 mb-3">
                @csrf
                <div class="row mb-2">
                    <label for="empID" class="col-sm-2 col-form-label fw-bold">社員番号</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="empID" />
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="name" class="col-sm-2 col-form-label fw-bold">氏名</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" />
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="dept" class="col-sm-2 col-form-label fw-bold">部署</label>
                    <div class="col-sm-8">
                        <select class="form-select" name="dept">
                            <option selected>Items</option>
                            <option value="a">a</option>
                            <option value="b">b</option>
                            <option value="c">c</option>
                            <option value="d">d</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="gender" class="col-sm-2 col-form-label fw-bold">性別</label>
                    <div class="col-sm-2 form-check px-5">
                        <input class="form-check-input" type="radio" name="gender" value="0" checked>
                        <label class="form-check-label">
                            女
                        </label>
                    </div>
                    <div class="col-sm-2 form-check">
                        <input class="form-check-input" type="radio" name="gender" value="1">
                        <label class="form-check-label">
                            男
                        </label>
                    </div>
                </div>
                <input type="submit" name="submit" value="登録" class="btn btn-primary" />
            </form>
            <x-return_link />
        </div>
</x-layout>
