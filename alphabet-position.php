<?php

function alphabet_position(string $s): string {
    return trim(preg_replace_callback("/[a-z]/", fn($a) => (ord($a[0]) - 96).' ', strtolower(preg_replace("/[^A-Za-z]/", '', $s))));
}

function alphabet_position2(string $s): string {
  
    $result = [];
    
    for ($i = 0; $i < strlen($s); $i++) {
  
      if (preg_match("/^[a-zA-Z]$/", $s[$i])) {
        $result[] = ord(strtolower($s[$i])) - ord('a') + 1;
      }
    }
    
    return join(' ', $result);
  }

// $result = alphabet_position('The sunset sets at twelve o\' clock.');
$result = alphabet_position('kiFWn9GuCG 7$#JE5.G04gD&d$iA^NdZRXL#uNeJh4eb#%XRKSeh.IJfx%@6YHY$IV4NHQxWKZZD.)Hf4y,BLnkeL1B@)#4)fRqNYaF7tFJHR+1VV*KzK#r#qAOY+ivNWuI#O(N*rwTQpbh@twsjMR?Y4YtC?!Q9CqbgA-1LScdLEv&sB98zoyg1WhyT5K(P&m6oW7ajB0^a&vS(u6BDtH+aZ(??v+GNm+,s3@YnOvx#,g@v!$Odj?y$R*C^^Rd$%rk6r?ayQI8,.hcw548jWgq?Si 1ed.DJ*U4U2#gE3v(W!JDu-RD(8)e!(AvlyOXZ#WYt5d2Mjf^?jSS?11kMqu&%N z%*M1kXQ dQrFTDQklsL8r*?9d*RwK7H#V7qGdkHZP@YXqdn-WY 3aYRX5Pv$nasZ*&. 1Bdb?Sr3tU64I*Yfq79U3KiTzK9E0V@IJo,BRx430vWRDlsS8v^nxRH It71JE$RA?(DpC^e48-4w.kadyC&U1wkaUg3HkZYw!JCuqqroME1W$GjnAR$0Lm6n&6s0lfH!tPaSUu0M.PyuUA 4?C$xH6(auFR+?(^8W!wtVs8*GlHSWIHUNK(Ni?Qygut1h(9GgpLuEOCau.NrRI05d7!XpIj+xqCqP$N#N#?Z, B$R+RbN4p3L1k273lR6q77QORUE9');
// var_dump($result, $result === '20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11');
var_dump($result, $result === '11 9 6 23 14 7 21 3 7 10 5 7 7 4 4 9 1 14 4 26 18 24 12 21 14 5 10 8 5 2 24 18 11 19 5 8 9 10 6 24 25 8 25 9 22 14 8 17 24 23 11 26 26 4 8 6 25 2 12 14 11 5 12 2 6 18 17 14 25 1 6 20 6 10 8 18 22 22 11 26 11 18 17 1 15 25 9 22 14 23 21 9 15 14 18 23 20 17 16 2 8 20 23 19 10 13 18 25 25 20 3 17 3 17 2 7 1 12 19 3 4 12 5 22 19 2 26 15 25 7 23 8 25 20 11 16 13 15 23 1 10 2 1 22 19 21 2 4 20 8 1 26 22 7 14 13 19 25 14 15 22 24 7 22 15 4 10 25 18 3 18 4 18 11 18 1 25 17 9 8 3 23 10 23 7 17 19 9 5 4 4 10 21 21 7 5 22 23 10 4 21 18 4 5 1 22 12 25 15 24 26 23 25 20 4 13 10 6 10 19 19 11 13 17 21 14 26 13 11 24 17 4 17 18 6 20 4 17 11 12 19 12 18 4 18 23 11 8 22 17 7 4 11 8 26 16 25 24 17 4 14 23 25 1 25 18 24 16 22 14 1 19 26 2 4 2 19 18 20 21 9 25 6 17 21 11 9 20 26 11 5 22 9 10 15 2 18 24 22 23 18 4 12 19 19 22 14 24 18 8 9 20 10 5 18 1 4 16 3 5 23 11 1 4 25 3 21 23 11 1 21 7 8 11 26 25 23 10 3 21 17 17 18 15 13 5 23 7 10 14 1 18 12 13 14 19 12 6 8 20 16 1 19 21 21 13 16 25 21 21 1 3 24 8 1 21 6 18 23 23 20 22 19 7 12 8 19 23 9 8 21 14 11 14 9 17 25 7 21 20 8 7 7 16 12 21 5 15 3 1 21 14 18 18 9 4 24 16 9 10 24 17 3 17 16 14 14 26 2 18 18 2 14 16 12 11 12 18 17 17 15 18 21 5');

// 'The narwhal bacons at midnight.'