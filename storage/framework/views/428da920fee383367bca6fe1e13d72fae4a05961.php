<?php $__env->startSection('styles'); ?>
    <style>
        input {
            border-radius: 5px;
            border: 2px solid black;
            box-shadow: 10px 10px 10px 10px rgba(200, 200, 200, 0.5);
            font-size: 25px;
            z-index: 1;
        }

        .oi {
            margin-top: 100px;
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <section class="homepage" id="home">
        <form class="home__search" action="" method="post">
            <input type="search" name="" class="input" placeholder="Search">
            <input type="submit" name="" value="" class="home__submit">
        </form>

        <div class="filters__search">
            <div class="bookmarks">
                <a href="#" class="bookmarks__button">Bookmarks</a>
            </div>
            <div class="filters__head">
                <h3>Filters</h3>
            </div>
            <div class="filters__content">
                <div class="filter1">
                    <p>Laptops</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter2">
                    <p>Tablets</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter3">
                    <p>Phones</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter4">
                    <p>Tv</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter5">
                    <p>Accessories</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter6">
                    <p>New First</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter7">
                    <p>No old ads</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter8">
                    <p>From favs</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter9">
                    <p>Select all</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="top__offers">
            <div class="offers__head">
                <h1>Category</h1>
            </div>

            <table style="width: 100%; margin: 20px">
                <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>Action</th>
                </thead>

                <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($category->id); ?>

                        </td>
                        <td>
                            <?php echo e($category->name); ?>

                        </td>
                        <td>
                            <form action="<?php echo e('/category/delete/'.$category->id); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </section>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/air/Desktop/laravel/alima/resources/views/categories.blade.php ENDPATH**/ ?>