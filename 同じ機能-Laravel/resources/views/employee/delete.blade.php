<x-layout>
    <x-slot:title>
        削除
        </x-slot>
        <div class="d-flex flex-column justify-content-center mx-5 px-5" style="height: 70%;">
            <form method="POST" action="{{ route('employee.destroy', [$id]) }}" class="mx-5 px-5 mb-3">
                @csrf
                @method('DELETE')
                <div class="row mb-2">
                    <label for="社員番号" class="col-sm-2 col-form-label fw-bold">社員番号</label>
                    <div class="col-sm-8">
                        {{ $employee->社員番号 }}
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="氏名" class="col-sm-2 col-form-label fw-bold">氏名</label>
                    <div class="col-sm-8">
                        {{ $employee->氏名 }}
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="部署" class="col-sm-2 col-form-label fw-bold">部署</label>
                    <div class="col-sm-8">
                        {{ $employee->部署 }}
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="性別" class="col-sm-2 col-form-label fw-bold">性別</label>
                    <div class="col-sm-8">
                        {{ $employee->性別 ? '男' : '女' }}
                    </div>
                </div>
                <input type="submit" name="submit" value="削除" class="btn btn-danger" />
            </form>
            <x-return_link />
        </div>
</x-layout>
