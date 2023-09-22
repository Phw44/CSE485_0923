<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<style>
    table {
        border-collapse: collapse; /* Loại bỏ đường kẻ nội bộ */
    }
    table, th, td {
        border: 1px solid black; /* Đường viền ngoài bảng */
    }
</style>
<table>
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php
    foreach ($arrs as $key) {
    ?>
    <tr>
        <td >
            <?php echo $key; ?>
        </td>
    </tr>
    <?php
    }
    ?>

</table>