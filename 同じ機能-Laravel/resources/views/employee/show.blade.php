<x-layout>
    <x-slot:title>
        詳細
        </x-slot>
        <div class="d-flex flex-column justify-content-center mx-5 px-5" style="height: 70%;">
            <div class="mx-5 px-5 mb-3">
                <div class="row mb-2">
                    <label for="社員番号" class="col-sm-2 col-form-label fw-bold">社員番号</label>
                    <div class="col-sm-8">
                        {{ $employee->id }}
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="氏名" class="col-sm-2 col-form-label fw-bold">氏名</label>
                    <div class="col-sm-8">
                        {{ $employee->社員番号 }}
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="部署" class="col-sm-2 col-form-label fw-bold">部署</label>
                    <div class="col-sm-8">
                        {{ $employee->氏名 }}
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="性別" class="col-sm-2 col-form-label fw-bold">性別</label>
                    <div class="col-sm-8">
                        {{ $employee->性別 == 0 ? '女' : '男' }}
                    </div>
                </div>
            </div>
            <div class="mx-5 px-5 mb-3">
                <a class="link" href="{{ route('employee.index') }}">戻る</a>
            </div>
        </div>
</x-layout>
