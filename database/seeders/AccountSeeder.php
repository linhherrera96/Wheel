<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class AccountSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'KOOLGAO1',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Lê Thành Chung',
            'dist_id' => 2

        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO2',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Thị Huyền',
            'dist_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO3',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Công Luận',
            'dist_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO4',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Thị Hồng Tiệp',
            'dist_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO5',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Duy Khánh',
            'dist_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO6',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Trần Tú Nguyên',
            'dist_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO7',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Thị Tuyết',
            'dist_id' => 3,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO8',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Thành Trung',
            'dist_id' => 3,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO9',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Thị Tâm',
            'dist_id' => 3,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO10',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Dương Công Sáu',
            'dist_id' => 3,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO11',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Hoàng',
            'dist_id' => 8,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO12',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Văn Bảnh',
            'dist_id' => 8,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO13',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Trần Văn Tám',
            'dist_id' => 8,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO14',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Ngọc Nam',
            'dist_id' => 8,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO15',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Đính',
            'dist_id' => 9,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO16',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Văn Đoan',
            'dist_id' => 9,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO17',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Phạm Sơn',
            'dist_id' => 9,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO18',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Phan Thanh Long',
            'dist_id' => 9,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO19',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Trần Nhật Anh',
            'dist_id' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO20',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Hoàng Tuấn Đức',
            'dist_id' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO21',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Lê Thanh Long',
            'dist_id' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO22',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Văn Tâm',
            'dist_id' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO23',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Thiều Thị Hoan',
            'dist_id' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO24',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Hoàng Thị Thu Hà',
            'dist_id' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO25',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Trần Bảo Khánh',
            'dist_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO26',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Phạm Công Kỳ',
            'dist_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO27',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Đàm Xuân Huynh',
            'dist_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO28',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Lê Thị Minh Tâm',
            'dist_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO29',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Cao Thị Huệ',
            'dist_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO30',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Văn Hùng',
            'dist_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO31',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Phan Văn Thành',
            'dist_id' => 6,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO32',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Trần Quang',
            'dist_id' => 6,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO33',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Phan Ngọc Hoàng Vũ',
            'dist_id' => 6,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO34',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Thị Phương Trinh',
            'dist_id' => 6,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO35',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Phan Quang Hải',
            'dist_id' => 6,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO36',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Trần Văn Lợi',
            'dist_id' => 6,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO37',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Nguyễn Anh Khoa',
            'dist_id' => 6,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO38',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Phan Văn Tín',
            'dist_id' => 7,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO39',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Mai Văn Tuấn',
            'dist_id' => 7,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO40',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Võ Thị Mỹ Phố',
            'dist_id' => 7,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO41',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Hồ Thị Hồng Nhung',
            'dist_id' => 7,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO42',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Trần Thị Mai Hương',
            'dist_id' => 7,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO43',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Võ Dũng Chinh',
            'dist_id' => 7,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO44',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Lê Viết Sinh',
            'dist_id' => 7,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO45',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Hoàng Thị Hảo',
            'dist_id' => 5,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO46',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Hữu Anh',
            'dist_id' => 5,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO47',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Trần Phương Thúy',
            'dist_id' => 5,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO48',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Võ Thị Nhàn',
            'dist_id' => 5,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO49',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Đoàn Thị Phượng',
            'dist_id' => 5,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO50',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Trần Quốc Hoàng',
            'dist_id' => 5,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO51',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'Đoàn Thị Trang',
            'dist_id' => 11,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO52',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'VÕ THỊ THANH THUY',
            'dist_id' => 11,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO53',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'NGÔ VĂN HUY',
            'dist_id' => 11,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO54',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'KIỀU TẤN THÀNH',
            'dist_id' => 11,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO55',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'NGÔ TRỌNG TUẤN',
            'dist_id' => 11,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO56',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'TRẦN NHẬT ANH',
            'dist_id' => 11,
        ]);

        DB::table('users')->insert([
            'name' => 'KOOLGAO57',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'NGUYỄN VĂN NHỰT',
            'dist_id' => 11,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO58',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'NGUYỄN THỊ MINH HIẾU',
            'dist_id' => 12,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO59',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'VÕ LÂM VĨ',
            'dist_id' => 12,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO60',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'DƯƠNG THỊ HẰNG',
            'dist_id' => 12,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO61',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'TRẦN THỊ NI NA',
            'dist_id' => 12,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO62',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'TRẦN THỊ MỸ HẠNH',
            'dist_id' => 12,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO63',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'NGUYỄN THỊ TUYẾT',
            'dist_id' => 12,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO64',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'HUYNH MINH VU',
            'dist_id' => 12,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO65',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'LÝ TRƯỜNG NHÂN',
            'dist_id' => 10,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO66',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'LÊ VĂN KẾ',
            'dist_id' => 10,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO67',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'LẠI THỊ THU TRANG',
            'dist_id' => 10,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO68',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'TRẦN QUANG ĐẠO',
            'dist_id' => 10,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO69',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'HUỲNH KIM THANH VIỆT',
            'dist_id' => 10,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO70',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'NGUYỄN ANH TUẤN',
            'dist_id' => 10,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO71',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'PHẠM THÀNH NHÂN',
            'dist_id' => 13,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO72',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'NGUYỄN VĂN TỈNH',
            'dist_id' => 13,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO73',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'VÕ THỊ KIM SINH',
            'dist_id' => 13,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO74',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'NGUYỄN VĂN BẢO QUỐC',
            'dist_id' => 13,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO75',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'LÊ THỊ CẨM LY',
            'dist_id' => 13,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO76',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'NGUYỄN VĂN KHƯƠNG',
            'dist_id' => 13,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO77',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'ĐOÀN VĂN DANH',
            'dist_id' => 14,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO78',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'VÕ ĐĂNG TẤT',
            'dist_id' => 14,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO79',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'LÊ THANH CHÍ BÌNH',
            'dist_id' => 14,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO80',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'LÊ THANH LỦY',
            'dist_id' => 14,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO81',
            'password'=> Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name'=> 'LÊ THANH SINH',
            'dist_id' => 14,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO82',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'TRẦN THỊ DIỂM',
            'dist_id' => 16,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO83',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN THỊ BÍCH TRÂM',
            'dist_id' => 16,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO84',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN QUỐC VỸ',
            'dist_id' => 16,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO85',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'PHAN ĐĂNG KHÁNH',
            'dist_id' => 16,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO86',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'VÕ THỊ NGÂN',
            'dist_id' => 16,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO87',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN THANH HOÀNG PHÚC',
            'dist_id' => 16,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO88',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'LÊ THỊ MỸ HẠNH',
            'dist_id' => 16,
        ]);

        DB::table('users')->insert([
            'name' => 'KOOLGAO89',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'TRẦN VĂN TRUNG',
            'dist_id' => 15,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO90',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'ĐỖ VĂN AN',
            'dist_id' => 15,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO91',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN THỊ HỒNG SƯƠNG',
            'dist_id' => 15,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO92',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN THỊ BÍCH NGỌC',
            'dist_id' => 15,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO93',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'HUỲNH THỊ TIỀN',
            'dist_id' => 15,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO94',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'LÊ THỊ THU HẢI',
            'dist_id' => 15,
        ]);


        DB::table('users')->insert([
            'name' => 'KOOLGAO95',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'TRẦN THẠCH SƠN',
            'dist_id' => 17,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO96',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN PHI LONG',
            'dist_id' => 17,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO97',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'BÙI QUỐC NHỰT',
            'dist_id' => 17,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO98',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'VÕ MINH PHI',
            'dist_id' => 17,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO99',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'VÕ THỊ THANH TRANG',
            'dist_id' => 17,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO100',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'PHẠM THANH NHÀN',
            'dist_id' => 17,
        ]);

        DB::table('users')->insert([
            'name' => 'KOOLGAO101',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN NỮ HOÀNG ÂN',
            'dist_id' => 19,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO102',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'DƯƠNG QUỐC CƯỜNG',
            'dist_id' => 19,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO103',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'LÊ VĂN HƯNG',
            'dist_id' => 19,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO104',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'ĐẶNG THỊ TRANG',
            'dist_id' => 19,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO105',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'TRẦN VĂN CẢM',
            'dist_id' => 19,
        ]);


        DB::table('users')->insert([
            'name' => 'KOOLGAO106',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'PHẠM NGỌC TƯ',
            'dist_id' => 18,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO107',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'VÕ THỊ HIẾU',
            'dist_id' => 18,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO108',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'ĐÀO THỊ ÁNH TIÊN',
            'dist_id' => 18,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO109',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'LÊ THỊ SƯƠNG',
            'dist_id' => 18,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO110',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN THỊ NY',
            'dist_id' => 18,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO111',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN NHẬT TRUNG',
            'dist_id' => 18,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO112',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN HỮU DƯƠNG',
            'dist_id' => 18,
        ]);


        DB::table('users')->insert([
            'name' => 'KOOLGAO113',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Đỗ Cao Tin',
            'dist_id' => 24,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO114',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Đặng Ngọc Khanh',
            'dist_id' => 24,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO115',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Thành Duy',
            'dist_id' => 24,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO116',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Trần Cao Thạch',
            'dist_id' => 24,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO117',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN VĂN THUẬT',
            'dist_id' => 24,
        ]);


        DB::table('users')->insert([
            'name' => 'KOOLGAO118',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Ngọc Minh',
            'dist_id' => 27,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO119',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Phạm Đình Phú',
            'dist_id' => 27,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO120',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Đỗ Thị Hiển Vi',
            'dist_id' => 27,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO121',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Duy Thành',
            'dist_id' => 27,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO122',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Lê Hoàng Việt',
            'dist_id' => 27,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO123',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Lê Đình Quà',
            'dist_id' => 27,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO124',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'LÊ HỒNG HÀ',
            'dist_id' => 27,
        ]);

        DB::table('users')->insert([
            'name' => 'KOOLGAO125',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Phan Thị Thu Thùy',
            'dist_id' => 25,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO126',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Đỗ Thị Thanh Thúy',
            'dist_id' => 25,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO127',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Anh Tuấn',
            'dist_id' => 25,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO128',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Trần Thị Tình',
            'dist_id' => 25,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO129',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Lê Thị Phương Dung',
            'dist_id' => 25,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO130',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Lâm Duy Phương',
            'dist_id' => 25,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO131',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'PHẠM THÀNH HƯNG',
            'dist_id' => 25,
        ]);


        DB::table('users')->insert([
            'name' => 'KOOLGAO132',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Bùi Quốc Việt',
            'dist_id' => 28,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO133',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Phan Trường Vũ',
            'dist_id' => 28,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO134',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Lê Tuấn Anh',
            'dist_id' => 28,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO135',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Phạm Thị Ngọc Huyền',
            'dist_id' => 28,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO136',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'BÙI QUỐC VIỆT',
            'dist_id' => 28,
        ]);


        DB::table('users')->insert([
            'name' => 'KOOLGAO137',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Phan Thắng Từ',
            'dist_id' => 20,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO138',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Thành Sơn',
            'dist_id' => 20,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO139',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Thị Ngọc Nữ',
            'dist_id' => 20,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO140',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Thị Ngọc Quý',
            'dist_id' => 20,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO141',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Ngọc Luận',
            'dist_id' => 20,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO142',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'ĐẶNG ĐÌNH Ý',
            'dist_id' => 20,
        ]);


        DB::table('users')->insert([
            'name' => 'KOOLGAO143',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Phạm Thị Thảo',
            'dist_id' => 21,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO144',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Phạm Nguyễn Phù Sa',
            'dist_id' => 21,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO145',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Phúc Thiện',
            'dist_id' => 21,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO146',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN NGỌC TỨ',
            'dist_id' => 21,
        ]);


        DB::table('users')->insert([
            'name' => 'KOOLGAO147',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Thị Yến Nhi',
            'dist_id' => 23,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO148',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Thị Yến',
            'dist_id' => 23,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO149',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Thị Hòng',
            'dist_id' => 23,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO150',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nv New',
            'dist_id' => 23,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO151',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'NGUYỄN THỊ TƯƠI',
            'dist_id' => 23,
        ]);


        DB::table('users')->insert([
            'name' => 'KOOLGAO152',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Tô Thị Ánh Nguyệt',
            'dist_id' => 22,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO153',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Thị Khánh Nhã',
            'dist_id' => 22,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO154',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Minh Thành',
            'dist_id' => 22,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO155',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Văn Quang',
            'dist_id' => 22,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO156',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Lê Thị Hà',
            'dist_id' => 22,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO157',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Ngân Thị Thu Hương',
            'dist_id' => 22,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO158',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'HỒ THỊ THU',
            'dist_id' => 22,
        ]);

        DB::table('users')->insert([
            'name' => 'KOOLGAO159',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Nguyễn Thị Bích Trim',
            'dist_id' => 26,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO160',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Trần Thị Mỹ',
            'dist_id' => 26,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO161',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'Đặng Phụng',
            'dist_id' => 26,
        ]);
        DB::table('users')->insert([
            'name' => 'KOOLGAO162',
            'password' => Hash::make('koolgao'),
            'role' => 'users',
            'first_last_name' => 'PHẠM VIỆT HÙNG',
            'dist_id' => 26,
        ]);
    }
}

