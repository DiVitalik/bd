<!DOCTYPE html>
<html lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>bookApp</title>
</head>

<body class =" bg-dark ">

<header class="d-flex flex-column flex-md-row align-items-center justify-content-between p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">Queries</p>

  <a class="btn btn-outline-primary" href="index.php">�������</a>
</header>
    <div class="container">
        <!-- ����� 1-->
        <form class="border rounded overflow-hidden p-3 bg-dark text-light" method="POST" action="query1.php">
          <div class="d-flex justify-content-between">
            <div>
              <span> 1) �����, ���������� </span>
              <select name="period" >
                <option value="<">��</option>
                <option value=">">�����</option>
                <option value="=">�</option>
              </select>
              <input name="book_year" type="number" min="1950" max="2021" step="1" value="2000" class="mx-1" required/>
              <span>�.</span>
            </div>
            <button type="submit" class="btn btn-info">���������</button>
          </div>
        </form>

        <!-- ����� 2-->
        <form class="border rounded overflow-hidden p-3 bg-dark text-light" method="POST" action="query2.php">
          <div class="d-flex justify-content-between">
            <div>
              <span> 2) �����, � �������� ������� ����������</span>
              <input name="title_template" type="text" class="mx-1" required/>
            </div>
            <button type="submit" class="btn btn-info">���������</button>
          </div>
        </form>

        <!-- ����� 3-->
        <form class="border rounded overflow-hidden p-3 bg-dark text-light" method="POST" action="query3.php">
          <div class="d-flex justify-content-between">
            <div>
              <span> 3) �����, ������� ��������� � ���������</span>
              <select name="book_category" class="mx-1">

                    <?php
                        require('connect_db.php');
                        //$pdo = new PDO("mysql:host=localhost;dbname=vitalaqw_book_db", "user1", "");
                        $query = $pdo->query('SELECT id, title FROM category');
                        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                            echo '<option value="'.$row->title.'">'.$row->title.'</option>';
                        }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-info">���������</button>
          </div>
        </form>

        <!-- ����� 4-->
        <form class="border rounded overflow-hidden p-3 bg-dark text-light" method="POST" action="query4.php">
          <div class="d-flex justify-content-between">
            <div>
                <span> 4) ��� ����� ���� </span>
                <input name="book_title" type="text" class="mx-1" required/>
                <span>� �� ��������</span>
            </div>
            <button type="submit" class="btn btn-info">���������</button>
          </div>
        </form>

        <!-- ����� 5-->
        <form class="border rounded overflow-hidden p-3 bg-dark text-light" method="POST" action="query5.php">
          <div class="d-flex justify-content-between">
            <div>
                <span> 5) ��� </span>
                <select name="origin">
                    <option value="native">�������������</option>
                    <option value="foreign">����������</option>
                </select>
                <span> ������, ���������� ����� </span>
                <input name="book_title" type="text" class="mx-1" required/>
                <span> � ������ �����, ������� ��� ��������</span>
            </div>
            <button type="submit" class="btn btn-info">���������</button>
          </div>
        </form>

        <!-- ����� 6-->
        <form class="border rounded overflow-hidden p-3 bg-dark text-light" method="POST" action="query6.php">
          <div class="d-flex justify-content-between">
            <div>
                <span> 6) ������ �� ���� ������ �� ��������� </span>
                <input name="interval" type="number" min="0" max="360" step="1" value="0" class="mx-1" required/>
                <span> ����</span>
            </div>
            <button type="submit" class="btn btn-info">���������</button>
          </div>
        </form>

        <!-- ����� 7-->
        <form class="border rounded overflow-hidden p-3 bg-dark text-light" method="POST" action="query7.php">
          <div class="d-flex justify-content-between">
            <div>
                <span> 7) ���������� ������� ��� ������ �����</span>
            </div>
            <button type="submit" class="btn btn-info">���������</button>
          </div>
        </form>

    </div>
</body>

</html>



