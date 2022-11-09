<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class VaccineTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vaccine_types')->delete();

        DB::table('vaccine_types')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'Vắc xin tiểu đơn vị',
                'description' => 'Vắc xin tiểu đơn vị đưa ra một hoặc nhiều kháng nguyên mà không đưa toàn bộ hạt mầm bệnh vào. Các kháng nguyên liên quan thường là các tiểu đơn vị protein, nhưng có thể là bất kỳ phân tử nào là một đoạn của mầm bệnh.'
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Vắc xin dạng hạt giống virus',
                'description' => '',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'DNA-based',
                'description' => 'Vắc xin DNA là một loại vắc -xin truyền một chuỗi DNA mã hóa kháng nguyên cụ thể vào các tế bào của một sinh vật như một cơ chế để tạo ra phản ứng miễn dịch.',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Vắc xin RNA',
                'description' => 'Vắc xin RNA chứa RNA, khi được đưa vào mô, sẽ hoạt động như một RNA thông tin (mRNA) để khiến các tế bào tạo ra protein lạ và kích thích phản ứng miễn dịch thu được, giúp cơ thể biết cách xác định và tiêu diệt mầm bệnh hoặc tế bào ung thư tương ứng. Các vắc xin RNA thường, nhưng không phải lúc nào cũng sử dụng RNA thông tin biến đổi nucleoside. Việc phân phối mRNA đạt được nhờ việc đồng hình thành của phân tử thành các hạt nano lipid để bảo vệ các sợi RNA và giúp hấp thụ chúng vào tế bào',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Vắc xin vectơ adenovirus',
                'description' => 'Các vắc xin này là các ví dụ về vắc xin vectơ virus không sao chép, sử dụng vỏ virus adeno chứa DNA mã hóa protein SARS‑CoV‑2. Các vắc-xin dựa trên vector virus chống lại COVID-19 là không sao chép, có nghĩa là chúng không tạo ra các phần tử virus mới, mà chỉ tạo ra kháng nguyên tạo ra phản ứng miễn dịch toàn thân.',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Vắc xin virus bất hoạt',
                'description' => 'Vắc xin bất hoạt bao gồm các phần tử virus đã được nuôi cấy và sau đó bị tiêu diệt bằng phương pháp như dùng nhiệt hoặc formaldehyde để làm mất khả năng sinh bệnh, trong khi vẫn kích thích phản ứng miễn dịch.',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Vắc xin vector vi rút',
                'description' => '',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Vắc xin nguyên vi rút',
                'description' => '',
            ),
        ));
    }
}
