<?php $__env->startSection('content'); ?>

<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <style>
        /* body {
                font-family: Arial, sans-serif;

            }

            .body {
                display: flex;
                padding: 20px 100px;
                flex-wrap: wrap;
                grid-column-start: auto;
                column-gap: 20px;
            }

           

            .book {
                width: 300px;
                margin-bottom: 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                overflow: hidden;
                justify-content: first baseline;

            }

            .book img {
                width: 300px;
                height: 350px;

            }

            .book h6 {
                padding: 10px;
                background-color: #ffffff00;
                color: #000000;
                margin: 0;
            }

            h6:hover {
                color: #23c483;
            }

            .book p {
                display: inline;
                padding: 10px;
                background-color: #f2f2f200;
                color: #333;
                margin: 0;
                font-weight: bold;
            }

            #Home-cart {
                font-size: 15px;
                color: #000000;
                background: #e6e6e600;
                border: 1px solid transparent;
                border-radius: 10px;
                outline: none;
                margin-left: 1rem;
                padding: 12px;
                cursor: pointer;
            }




            #Home-cart:hover {
                border-color: #fff;
            }

            form {
                display: inline;
            }

            a {
                text-decoration: none;
            }



            button {
                padding: 1.3em 3em;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;
                color: #000;
                background-color: #fff;
                border: none;
                border-radius: 45px;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease 0s;
                cursor: pointer;
                outline: none;
            }

            button:hover {
                background-color: #23c483;
                box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
                color: #fff;
                transform: translateY(-7px);
            }

            button:active {
                transform: translateY(-1px);
            }

            .center {
                display: flex;
                text-align: center;
                justify-content: center;
                padding: 10px;
            }

            .pag {
                background: none;
                display: flex;
                text-align: center;
                justify-content: center;
            }


            .pagination a {
                color: black;
                float: left;
                padding: 8px 16px;
                text-decoration: none;
                transition: background-color .3s;
                border: 1px solid #ddd;
                margin: 0 4px;
            }

            .pagination a.active {
                background-color: #4CAF50;
                color: white;
                border: 1px solid #4CAF50;
            }

            .pagination a:hover:not(.active) {
                background-color: #ddd;
            } */
        /* .card {
            float: right;
            width: 260px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        } */

        .card {
            float: right;
            width: 260px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            transition: bottom 0.3s ease;
        }

        .chat-header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            font-size: 18px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            cursor: pointer;
        }

        .chat-window {
            height: 220px;
            overflow-y: scroll;
        }

        .message-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .message {
            display: flex;
            padding: 5px 10px;
            margin-bottom: 10px;
        }

        .message.user-message {
            justify-content: flex-end;
        }

        .message.user-message .message-text {
            background-color: #0084FF;
            color: white;
            border-radius: 18px 18px 0 18px;
        }

        .message.system-message .message-text {
            background-color: #f1f0f0;
            color: black;
            border-radius: 18px 18px 18px 0;
        }

        .message-text {
            max-width: 200px;
            padding: 10px;
            font-size: 14px;
            line-height: 1.4;
        }

        .chat-input {
            display: flex;
            align-items: center;
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        .message-input {
            flex: 1;
            border: none;
            outline: none;
            padding: 5px;
            font-size: 14px;
        }

        .send-button {
            border: none;
            outline: none;
            background-color: #333;
            color: #fff;
            font-size: 14px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .send-button:hover {
            background-color: #fff;
            color: #000;
            box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
        }

        .chat-window,
        .chat-input {
            display: none;
        }

        .active .chat-window,
        .active .chat-input {
            display: block;
        }

        .card.active {
            display: block;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .card.hidden {
            bottom: -220px;
        }
    </style>
    <script>
        function toggleChat() {
            var card = document.querySelector('.card');
            card.classList.toggle('active');

            if (card.classList.contains('active')) {
                card.classList.remove('hidden');
                card.style.bottom = "20px";
            } else {
                card.classList.add('hidden');
                card.style.bottom = "-220px";
            }
        }

        function sendMessage() {
            var messageInput = document.querySelector('.message-input');
            var messageList = document.querySelector('.message-list');
            var userMessage = messageInput.value.trim();

            if (userMessage) {
                var userMessageElement = document.createElement('li');
                userMessageElement.classList.add('message', 'user-message');
                userMessageElement.innerHTML = `<div class="message-text">${userMessage}</div>`;
                messageList.appendChild(userMessageElement);

                messageInput.value = '';
                userMessageElement.scrollIntoView({ behavior: 'smooth' });

                // Thêm độ trễ 3-4 giây trước khi thêm tin nhắn phản hồi
                setTimeout(function () {
                    var responseMessageElement = document.createElement('li');
                    responseMessageElement.classList.add('message', 'system-message');
                    responseMessageElement.innerHTML = '<div class="message-text">Hiện tại nhân viên hỗ trợ đang bận, vui lòng chờ đợi</div>';
                    messageList.appendChild(responseMessageElement);
                    responseMessageElement.scrollIntoView({ behavior: 'smooth' });
                }, 3000); // Độ trễ 3000ms = 3 giây
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            var sendButton = document.querySelector('.send-button');
            sendButton.addEventListener('click', sendMessage);

            var messageInput = document.querySelector('.message-input');
            messageInput.addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
        });

    </script>
</head>

<body>
    <main>
        <div class="body">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="book">
                    <img src="<?php echo e(asset('images/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>">
                    <a href="<?php echo e(route('Detail', ['id' => $product->product_id])); ?>">
                        <h6><?php echo e($product->product_name); ?></h6>
                    </a>
                    <div class="book-body" style="padding: 10px">
                        <p><?php echo e($product->price); ?> VND</p>
                        <form action="<?php echo e(route('addToCart', ['id' => $product->product_id])); ?>" method="GET">
                            <button id="Home-cart">
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            </button>
                        </form>
                        <form action="<?php echo e(route('addfavorite', ['id' => $product->product_id])); ?>">
                            <button id="Home-cart">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="card" id="chatCard">
            <div class="chat-header" onclick="toggleChat()">Yêu Cầu Hỗ Trợ</div>
            <div class="chat-window">
                <ul class="message-list"></ul>
            </div>
            <div class="chat-input">
                <input type="text" class="message-input" placeholder="Type your message here">
                <button class="send-button">Send</button>
            </div>
        </div>



        <?php echo e($products->links('pagination::bootstrap-4')); ?>



</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navs.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\DoAn\example-app\resources\views/home.blade.php ENDPATH**/ ?>