<?php echoUOJPageHeader(UOJLocale::get('help')) ?>
<article>
	<header>
		<h2 class="page-header"><?= UOJLocale::get('faq') ?></h2>
	</header>
	<section>
		<header>
			<h4>1．什么是 <?= UOJConfig::$data['profile']['oj-name'] ?></h4>
		</header>
		<p>见 <a href="/blog/2"><?= HTML::url('/blog/2') ?></a>。 </p>
	</section>
	<section>
		<header>
			<h4>2．注册后怎么上传头像</h4>
		</header>
		<p><?= UOJConfig::$data['profile']['oj-name-short'] ?> 不提供头像存储服务。每到一个网站都要上传一个头像挺烦的对不对？我们支持 Gravatar，请使用 Gravatar 吧！Gravatar 是一个全球的头像存储服务，你的头像将会与你的电子邮箱绑定。在各大网站比如各种 Wordpress 还有各种 OJ 比如 UOJ、LibreOJ、Simple OJ、Vijos、Contest Hunter 上，只要你电子邮箱填对了，那么你的头像也就立即能显示了！</p>
		<p>快使用 Gravatar 吧！Gravatar 地址：<a href="https://cn.gravatar.com/">https://cn.gravatar.com/</a>。进去后注册个帐号然后与邮箱绑定并上传头像，就 ok 啦！</p>
	</section>
	<section>
		<header>
			<h4>3．<?= UOJConfig::$data['profile']['oj-name-short'] ?> 的测评环境</h4>
		</header>
		<p>测评环境是 Ubuntu Linux 14.04 LTS x64。</p>
		<p>C++ 的编译器是 g++ 4.8.4，编译命令：<code>g++ code.cpp -o code -lm -O2 -DONLINE_JUDGE</code>。如果选择 C++11 会在编译命令后面添加<code>-std=c++11</code>。</p>
		<p>C 的编译器是 gcc 4.8.4，编译命令：<code>gcc code.c -o code -lm -O2 -DONLINE_JUDGE</code>。</p>
		<p>Pascal 的编译器是 fpc 2.6.2，编译命令：<code>fpc code.pas -O2</code>。</p>
		<p>Java8 的 JDK 版本是 jdk-8u152，编译命令：<code>javac code.java</code>。</p>
		<p>Python 会先编译为优化过的字节码 <samp>.pyo</samp> 文件。支持的 Python 版本分别为 Python 2.7 和 3.4。</p>
	</section>
	<section>
		<header>
			<h4>4．递归 10<sup>7</sup> 层怎么没爆栈啊</h4>
		</header>
		<p>没错就是这样！除非是特殊情况，<?= UOJConfig::$data['profile']['oj-name-short'] ?> 测评程序时的栈大小与该题的空间限制是相等的！</p>
	</section>
	<section>
		<header>
			<h4>5．博客使用指南</h4>
		</header>
		<p>见 <a href="/blog/65"><?= HTML::url('/blog/65') ?></a>。</p>
	</section>
	<section>
		<header>
			<h4>6．交互式类型的题怎么本地测试</h4>
		</header>
		<p>唔……好问题。交互式的题一般给了一个头文件要你 include 进来，以及一个实现接口的源文件 grader。好像大家对多个源文件一起编译还不太熟悉。</p>
		<p>对于 C++：<code>g++ -o code grader.cpp code.cpp</code></p>
		<p>对于 C 语言：<code>gcc -o code grader.c code.c</code></p>
		<p>如果你是悲催的电脑盲，实在不会折腾没关系！你可以把 grader 的文件内容完整地粘贴到你的 code 的 include 语句之后，就可以了！</p>
		<p>什么你是萌萌哒 Pascal 选手？一般来说都会给个 grader，你需要写一个 Pascal 单元。这个 grader 会使用你的单元。所以你只需要把源文件取名为单元名 + <code>.pas</code>，然后：</p>
		<p>对于 Pascal 语言：<code>fpc grader.pas</code></p>
		<p>就可以啦！</p>
	</section>
	<section>
		<header>
			<h4>7．IO 交互式的题怎么本地测试</h4>
		</header>
		<p>IO 交互式的题指的是这种题型：有两个程序 <code>a</code> 和 <code>b</code>，其中 <code>a</code> 的输出连接 <code>b</code> 的输入，<code>b</code> 的输出连接 <code>a</code> 的输入。且交互过程中需要实时刷新缓存 (flush)。</p>
		<p>这种交互题的一大优点是不受语言的限制，<del>当然你可以学习早年 IOI 使用人类智慧手动输入也是可以滴</del>。</p>
		<p>如果 <code>b</code> 的输出不连接 <code>a</code> 的输入，则可以直接使用管道：<code>./a | ./b</code></p>
		<p>否则，可以使用以下命令行：</p>
		<p>Linux：<code>(./a &lt; /dev/fd/3 | ./b) 3&gt;&amp;1 | :</code></p>
		<p><del>Windows：<code>a.exe &lt;&amp;1 | b.exe &gt;&amp;0</code> (经实测该命令不太靠谱，大家还是抓紧转 Linux 吧)</del></p>
	</section>
	<section>
		<header>
			<h4>8．联系方式</h4>
		</header>
		<p>如果你<strong style="color: red">想注册</strong>、想出题、想办比赛、发现了 BUG 或者对网站有什么建议，可以通过下面的方式联系我们：</p>
		<ul>
			<li>私信联系 <?= UOJConfig::$data['profile']['administrator'] ?>。</li>
			<li>直接在机房里喊一声。</li>			
			<li>你也可以进 QQ 群水水，群号是 <?= UOJConfig::$data['profile']['qq-group'] ?>，Stupid OJ <em>珂学</em>群。</li>
		</ul>
		<p>也许你突然发现你<strong style="color: red">看不了题</strong>那是因为你被分到了未分类组，请联系管理员来获得权限。</p>
	</section>
</article>

<?php echoUOJPageFooter() ?>
