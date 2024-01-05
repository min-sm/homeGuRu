<?php
//login check

session_start();
$supplier_id = $_SESSION["sup_id"];

if(isset($_GET["page"])){
    $page = $_GET["page"];
    if($page < 1){
        $page = 1;
    }
}else{
    $page = 1;
}

$rowLimit = 6;
$pageStart = ($page - 1) * $rowLimit;

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT
        *
    FROM 
        m_products
    INNER JOIN m_category 
    ON 
        m_products.p_category = m_category.id
    INNER JOIN m_brand 
    ON 
        m_products.p_brand = m_brand.id
    WHERE 
        m_products.del_flg = 0 
    AND
        m_products.supplier_id = :sup_id
    "
);
$sql->bindValue(":sup_id", $supplier_id);
$sql->execute();
$totalRecords = count($sql->fetchAll(PDO::FETCH_ASSOC));

$sql = $pdo->prepare(
    "SELECT 
        m_products.id AS id,
        m_products.p_name AS name, 
        m_products.p_photo1 AS photo,
        m_category.cat_name AS category, 
        m_brand.band_name AS brand, 
        m_products.p_discount AS discount, 
        m_products.p_buy_price AS buyprice, 
        m_products.p_sell_price AS sellprice
    FROM 
        m_products
    INNER JOIN m_category 
    ON 
        m_products.p_category = m_category.id
    INNER JOIN m_brand 
    ON 
        m_products.p_brand = m_brand.id
    WHERE 
        m_products.del_flg = 0 
    AND
        m_products.supplier_id = :sup_id
    LIMIT 
        $pageStart, $rowLimit"
);
$sql->bindValue(":sup_id", $supplier_id);
$sql->execute();
$productLists = $sql->fetchAll(PDO::FETCH_ASSOC);

$pageLists = ceil($totalRecords / $rowLimit); 

//datas -> productLists and pageLists

?>

<!-- Start header -->
<?php
$hasJsFile = TRUE;
$jsFileNames = ["searchProduct"];
include "../components/header.php";
?>
<!-- End header -->

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>
        <div class="col-span-5 relative">
            <?php
            $currentMenu = "Product Lists";
            include "../components/navbar.php";
            ?>

            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>

                <div class="flex justify-between items-center mb-3">
                    <div>
                        <input id="searchInput" class="p-2 w-[500px] h-[40px] border border-slate-300 rounded-md" type="text" placeholder="search products">
                    </div>
                    <div>
                        <button class="bg-green-800 text-white px-4 py-2 text-white text-md font-semibold rounded-md actvie:scale-[1.03]">
                            <a href="./addproduct.php">
                                <ion-icon class="text-lg" name="add-circle-outline"></ion-icon> Add Product
                            </a>
                        </button>
                    </div>
                </div>

                <div>
                    <table class="min-w-full table-auto rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-[#66CC33] bg-opacity-50 text-white">
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    product
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    category
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    brand
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    discount
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    buy price
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    sell price
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="product-lists-container bg-white divide-y divide-gray-200">
                            <?php foreach ($productLists as $product) { ?>
                                <tr id="product-list" class="hover:bg-slate-200">
                                    <td class="px-6 py-4 ">
                                        <div class="flex space-x-4 items-center">
                                            <img src="../../../<?= $product['photo'] ?>" class="w-[60px]" alt="product-img">
                                            <a href="../../Controller/products/productDetailController.php?product_id=<?= $product['id'] ?>" class="text-blue-500 underline">
                                                <?= $product["name"]; ?>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>
                                            <?= $product["category"]; ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>
                                            <?= $product["brand"]; ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>
                                            <?= $product["discount"] ?> %
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>
                                            <?= $product["sellprice"] ?> MMK
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>
                                            <?= $product["buyprice"] ?> MMK
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">

                                        <div class="flex space-x-2">
                                            <a href="../../Controller/products/editProductController.php?product_id=<?= $product['id'] ?>">
                                                <button class="bg-green-500 px-3 py-1 rounded-md text-white font-semibold">
                                                    Edit
                                                </button>
                                            </a>
                                            <a href="../../Controller/products/deleteProductController.php?product_id=<?= $product['id'] ?>">
                                                <button class="delete-btn bg-red-500 px-3 py-1 rounded-md text-white font-semibold">
                                                    Remove
                                                </button>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            <?php }; ?>

                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="w-full flex justify-center p-5">
                    <!-- Pagination component -->
                    <nav class="flex items-center justify-center">
                        <!-- Previous button -->
                        <a href="?page=<?= $page-1 ?>" 
                        class="px-3 py-1 text-[#66CC33] bg-white border border-[#66CC33] rounded-tl-md rounded-bl-md 
                        <?php if($page <= 1) { echo "pointer-events-none"; } ?>
                        ">
                            <ion-icon name="chevron-back"></ion-icon>
                        </a>
        
                        <!-- Page numbers -->
                        <?php for ($i = 1; $i <= $pageLists ; $i++) { ?>
                            <a href="?page=<?= $i ?>" 
                            class="<?php if($i == $page) {echo "pagination-active";} ?>
                            px-3 py-1 border border-[#66CC33] text-bold"><?= $i ?>
                            </a>
                        <?php } ?>
                        
                        <!-- Next button -->
                        <a href="?page=<?= $page+1 ?>" class="px-3 py-1 text-[#66CC33] bg-white border border-[#66CC33] rounded-tr-md rounded-br-md 
                        <?php if($page >= $pageLists) { echo "pointer-events-none"; } ?>
                        ">
                            <ion-icon name="chevron-forward"></ion-icon>
                        </a>
                    </nav>
                </div>
                <!-- Pagination -->

            </div>

        </div>
    </section>
</body>


</html>
