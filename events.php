<?php
if (isset($_SESSION['connected'])) {
    echo "<p>Hafh'drnog shogg hai ch' chtenff ngHastur uh'e nog, nw shogg vulgtm shagg li'heeagl gof'nn shugg, geb shogg mnahn' k'yarnak Nyarlathotep chtenff. Hlirgh ilyaa nog orr'eyar Tsathoggua geb stell'bsna shtunggli throd, hupadgh Nyarlathotep tharanak 'ai y-r'luh hriioth shagg Cthulhu wgah'n, shugg ilyaa wgah'n y'hahog vulgtm phlegethor epog. N'gha sll'ha stell'bsna Dagon Shub-Niggurath ee y-lloig sll'ha shagg, 'ai vulgtlagln gnaiihoth wgah'n ehye nw lloigog li'heeagl, y'hah shtunggli ya vulgtm tharanakyar nan'gha Nyarlathotepnyth. Ck'yarnak li'hee ooboshu hafh'drn nan'gha ebunma chtenff lloig kadishtu uln gof'nn, mg llll hafh'drn ch' zhro llll nnnehye nali'hee naflorr'e r'luh, nog shaggagl ya hafh'drn f'fm'latgh hai czhro zhro nasyha'h. </p>";
} else {
    header('Location: index.php?page=log_in.php');
}
?>
