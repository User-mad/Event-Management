<!DOCTYPE html>
<html lang="en">


<?php

    include './db/db.php';
    

?>
<head>
    
<?php session_start(); ?>


<style>
        /* latin-ext */
    @font-face {
    font-family: 'Domine';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/domine/v11/L0x8DFMnlVwD4h3htfqndSk.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Domine';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/domine/v11/L0x8DFMnlVwD4h3hu_qn.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Domine';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/domine/v11/L0x8DFMnlVwD4h3htfqndSk.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Domine';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/domine/v11/L0x8DFMnlVwD4h3hu_qn.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hmIqOjjg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hvIqOjjg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hnIqOjjg.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hoIqOjjg.woff2) format('woff2');
    unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hkIqOjjg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hlIqOjjg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hrIqM.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Udc1UAw.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0ddc1UAw.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Vdc1UAw.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0adc1UAw.woff2) format('woff2');
    unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Wdc1UAw.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Xdc1UAw.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Zdc0.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhmIqOjjg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhvIqOjjg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhnIqOjjg.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhoIqOjjg.woff2) format('woff2');
    unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhkIqOjjg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhlIqOjjg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhrIqM.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWiUNhmIqOjjg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWiUNhvIqOjjg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWiUNhnIqOjjg.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWiUNhoIqOjjg.woff2) format('woff2');
    unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWiUNhkIqOjjg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWiUNhlIqOjjg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWiUNhrIqM.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OX-hpOqc.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OVuhpOqc.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OXuhpOqc.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OUehpOqc.woff2) format('woff2');
    unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OXehpOqc.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OXOhpOqc.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');
    unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format('woff2');
    unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOX-hpOqc.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOVuhpOqc.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOXuhpOqc.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOUehpOqc.woff2) format('woff2');
    unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOXehpOqc.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOXOhpOqc.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
    unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');
    unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    } 

    .abc {
        line-height: 18px;
    height: 38px;
    border: solid 1px #cccccc;
    border-radius: 3px;
    padding: 10px;
    font-size: 13px;
    color: #333;
    font-style: italic;
    width: 100%;
    }
                
        
</style>
    


    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->
    
    <!-- Title -->
    <title>Event Planning</title>
    
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/Favicon.ico">
    
    <!-- CSS Stylesheet -->
    
    <link href="css/bootstrap.css" rel="stylesheet"><!-- bootstrap css -->
    <link href="css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
    <link href="css/styles.css" rel="stylesheet" /><!-- font css --> 
    <link href="css/jquery.selectbox.css" rel="stylesheet" /><!-- select Box css -->
    <!-- <link href="css/datepicker.css" rel="stylesheet" />Date picker css  -->
    <link href="css/docs.css" rel="stylesheet"><!--  template structure css -->

   

   <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
</head>
<body class="inner-page">
	
    	<header id="header">
            <?php include 'innertop.php';
            	  
                $vid=$_GET['id'];
            
                $str="SELECT * FROM venue WHERE vid='$vid'";

                $query=mysqli_query($con,$str);
                while($result=mysqli_fetch_array($query))
                {
                    $name=$result['vname'];
                    $description=$result['vdescription'];
                    $cost = $result['vcost'];
                    $capacity = $result['vcapacity'];
                    $address = $result['vaddress'];
                    $type = $result['vtype'];
                  
                    $himage = $result['himage'];
                    $image = $result['vimage'];
                    $image2 = $result['vimage2'];
                    $image3 = $result['vimage3'];
                    $image4 = $result['vimage4'];
                    $image5 = $result['vimage5'];
                    $image6 = $result['vimage6'];
                }
                
                
                $date;
                $output = '';
                $q = "SELECT * from booking where v_id = '$vid' ";
                $r = mysqli_query($con, $q);
                $array = array();

                while($read = mysqli_fetch_array($r))
                {
                    $fdate = $read['date_from'];
                    $tdate = $read['date_to'];

                    $date = $fdate; 
                    while($date <= $tdate)
                    {
                        array_push($array,$date);
                        $date = date('Y-m-d', strtotime($date. "+1 days") );
                    }
                }
                // print_r($array);
            ?>
           
        </header>
        <br>
        <br>
        <br>
        <div class="simple-banner">
        	<div class="banner-img">
                <img src="pimages/venue/<?php echo $himage; ?>" alt="">
            </div>
            <div class="text">
            	<div class="inner-text">
                	<h2><?php echo $name; ?> </h2>
                    <p><?php echo $address; ?></p>
                </div>
            </div>
        </div>
        <section class="content">
        	<div class="breadcrumb">
            	<div class="container">
                
                </div>
            </div>
        	<div class="search-resultPage">
            	<div class="fiexd-nav">
                	<div class="container">
                    	<div class="back-link"><a href="innervenue.php"><span class="icon icon-back-filled"></span>Back</a></div>
                        <ul>
                        	<li>
                            	<a href="javascript:;">
                                	<span class="icon icon-info"></span>
                                    <span class="text">Information</span>
                            	</a>
                            </li>
                            <li>
                            	<a href="javascript:;">
                                	<span class="icon icon-hands"></span>
                                    <span class="text">Amenities</span>
                            	</a>
                            </li>
                            <li>
                            	<a href="javascript:;">
                                	<span class="icon icon-thumb-image"></span>
                                    <span class="text">Photo Gallery</span>
                            	</a>
                            </li>
                            <li>
                            	<a href="javascript:;"> 
                                	<span class="icon icon-special-features"></span>
                                    <span class="text">Special Features</span>
                            	</a>
                            </li>
                           
                            <li>
                            	<a href="javascript:;">
                                	<span class="icon icon-term-condition"></span>
                                    <span class="text"> Terms & Conditions</span>
                            	</a>
                            </li>
                            <li>
                            	<a href="javascript:;">
                                	<span class="icon icon-cancellation-policy"></span>
                                    <span class="text">Cancellation Policy</span>
                            	</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                

                	<div class="row">
                    	<div class="col-lg-9 col-sm-9 col-md-9">
                        	<div class="hotel-info tab-content">
                            	<h2>About the <?php echo $name;?></h2>
                                <div class="inner-info">
                                    <p><?php echo $description;?> </p> <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <div class="address">
                                        <div class="map-view">
                                            <img src="images/map-img1.png" alt="">
                                            <div class="link"><a href="#">See Location</a></div>
                                        </div>
                                        <div class="address-view">
                                            <h3>Address :</h3>
                                            <div class="address-slide full">
                                                <div class="icon icon-location-2"></div>
                                                <label><?php echo $name;?> </label>
                                                <p><?php echo $address;?></p>
                                            </div>
                                            <h3>Near by :</h3>
                                            <div class="address-slide">
                                                <div class="icon icon-plane"></div>
                                                <label>13 km</label>
                                                <p>from Sardar Vallabhbhai Patel Airport....</p>
                                            </div>
                                            <div class="address-slide">
                                                <div class="icon icon-train"></div>
                                                <label>05 km</label>
                                                <p>from Kalupur Railway Station</p>
                                            </div>
                                            <div class="address-slide">
                                                <div class="icon icon-bus"></div>
                                                <label>04 km</label>
                                                <p>from Gita Mandir Bus Stop</p>
                                            </div>
                                            <div class="address-slide">
                                                <div class="icon icon-cart"></div>
                                                <label>02 km</label>
                                                <p>Raipur Shopping Mall</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list tab-content">
                            	<h2>Amenities for You and Guests</h2>
                                <div class="amenities-view">
                                    <div class="amenities-box">
                                        <div class="icon icon-tea"></div>
                                        <span>Coffee Shop</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-wifi"></div>
                                        <span>Wifi</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-parking"></div>
                                        <span>Parking</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-airport-shuttle"></div>
                                        <span>Airport Shuttle</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-bar"></div>
                                        <span>Bar</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-road-guide"></div>
                                        <span>Guide Service</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-yoga"></div>
                                        <span>Yoga Centre</span>
                                    </div>
                                    <div class="amenities-box disabled">
                                        <div class="icon icon-ayurved"></div>
                                        <span>Ayurveda Centre</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-payment"></div>
                                        <span>Payment Mode</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-ac"></div>
                                        <span>A/C</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-meeting"></div>
                                        <span>Conference Hall</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-apple"></div>
                                        <span>Health Club</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-gym"></div>
                                        <span>Gym</span>
                                    </div>
                                    <div class="amenities-box disabled">
                                        <div class="icon icon-flower"></div>
                                        <span>Florist on Request</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-swimming"></div>
                                        <span>Swimming Pool</span>
                                    </div>
                                    <div class="amenities-box disabled">
                                        <div class="icon icon-steam-bath"></div>
                                        <span>Steam Sauna</span>
                                    </div>
                                    <div class="amenities-box disabled">
                                        <div class="icon icon-shirt"></div>
                                        <span>Laundry Service</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-spa"></div>
                                        <span>Spa</span>
                                    </div>
                                    <div class="amenities-box disabled">
                                        <div class="icon icon-beauty-saloon"></div>
                                        <span>Beauty Salon</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-sun-bed"></div>
                                        <span>Sun Beds</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-bag"></div>
                                        <span>Business Centre</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-doctor"></div>
                                        <span>Doctor on Call</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-massage-center"></div>
                                        <span>Massage Centre</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-taxi"></div>
                                        <span>Taxi Service</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-currency-xchg"></div>
                                        <span>Currency Exchange</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-handicape"></div>
                                        <span>Handicap Facilities</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-spoon"></div>
                                        <span>Restaurant</span>
                                    </div>
                                    <div class="amenities-box">
                                        <div class="icon icon-room-service"></div>
                                        <span>Room Service</span>
                                    </div>
                                </div>
                            </div>
                            <div class="photo-gallery tab-content">
                            	<h2>Photo Gallery</h2>
                                <div class="gallery-view">
                                	<div class="row">
                                    	<div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/venue/<?php echo $image; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/venue/<?php echo $image; ?>" alt="">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/venue/<?php echo $image2; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/venue/<?php echo $image2; ?>" alt="">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/venue/<?php echo $image3; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/venue/<?php echo $image3; ?>" alt="">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                                <a href="pimages/venue/<?php echo $image4; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                                    <img src="pimages/venue/<?php echo $image4; ?>" alt="">
                                                </a>
                                            </div>
                                          
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/venue/<?php echo $image5; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/venue/<?php echo $image5; ?>" alt="">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/venue/<?php echo $image6; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/venue/<?php echo $image6; ?>" alt="">
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="special-features tab-content">
                            	<h2>Special Features</h2>
                                <div class="featuresInfo">
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                            </div>
                            
                       
                            <div class="terms-conditions tab-content">
                            	<h2>Terms & Conditions</h2>
                                <div class="conditions">
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                            <div class="cancellation-policy tab-content">
                                <h2>Cancellation Policy</h2>
                                <div class="policy">
                                    <h3>1 policy</h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h3>2 policy</h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h3>3 policy</h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="col-log-3 col-sm-3 col-md-3">
                        <div class="booking-formMain">
                        <div class="book-title">Enter Booking Details </div>	
                        <div class="book-form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="select-box">
                                        <select name="eventtype" id="eventtype" onchange="change()" tabindex="1" class="abc" >
                                            <option>Select Your Event</option>
                                            <option value="Wedding">Wedding</option>
                                            <option value="Birthday">Birthday</option>
                                            <option value="Party">Party</option>
                                        </select>
                                    </div>
                                        </br>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-box">
                                        <input type="text" name="datep1" id="datep1" placeholder="Enter Date From">
                                        <script> 
                                            var dates = <?php echo json_encode($array); ?>

                                            function DisableDates(datep1) {
                                                var string = jQuery.datepicker.formatDate('yy-mm-dd', datep1);
                                                return [dates.indexOf(string) == -1];
                                            }	

                                            $(function(){
                                                $("#datep1").datepicker({ 
                                                    minDate: 0,
                                                    dateFormat: 'yy-mm-dd',  
                                                    orientation : 'auto bottom',                               
                                                    beforeShowDay: DisableDates
                                                });
                                            });
                                      </script>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-box">
                                        <input type="text" name="datep2" id="datep2" placeholder="Enter Date To">
                                      
                                      <script> 
                                            var dates = <?php echo json_encode($array); ?>

                                            function DisableDates(datep2) {
                                                var string = jQuery.datepicker.formatDate('yy-mm-dd', datep2);
                                                return [dates.indexOf(string) == -1];
                                            }	

                                            $( ".selector" ).datepicker({ dateFormat: 'yy-mm-dd' });

                                            $(function(){
                                                $("#datep2").datepicker({
                                                    minDate: 0,
                                                    dateFormat: 'yy-mm-dd',  
                                                    orientation : 'auto bottom',
                                                    beforeShowDay: DisableDates
                                                });
                                            });
                                      </script>

                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-12">
                                    <div class="input-box">
                                        <input type="text" name="guest" id="guest" placeholder="Number of Guests"  >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="submit-box">
                                    <a href="" id="request<?= $vid; ?>" onclick="return getData()" class="btn">Request Booking</a>
                                    <script>
                                      
                                    function change()
                                    {
                                        var type = document.getElementById("eventtype").value;
                                        if(type == "Birthday" || type == "Party")
                                        {
                                            document.getElementById("datep2").style.display = 'none';
                                        }
                                        else {
                                            document.getElementById("datep2").style.display = 'block';   
                                        }
                                        

                                    }
                                   
  
                                      function getData(){
                                          
                                          var datefrom = document.getElementById("datep1").value;
                                          var dateto = document.getElementById("datep2").value;
                                          var event = document.getElementById("eventtype").value;
                                          var guest = document.getElementById("guest").value;
  
                                          var request = document.getElementById("request<?= $vid; ?>");
                                          
                                           window.location =   "requestbooking.php?vid=<?= $vid; ?>&vcost=<?= $cost; ?>"  +"&event="+event + "&datefrom="+datefrom + "&dateto="+dateto+ "&guest="+guest; 
                                          //console.log(request.href);
                                          return false;
                                          
                                      }
                                     
                                         
                                         
                                          </script>
                                    </div>
                                </div>
                                
          
         
  
        
                            </div>
                        </div>
                        </div>
                            </div>
                    </div>
                    </div>

                  
                </div>
            </div>
        </section>
        
       

        
        
        <?php include 'footer.php'; ?>
        
        
	
       
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!-- <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.selectbox-0.2.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script> 
    <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>
	<script type="text/javascript" src="js/placeholder.js"></script>
    <script type="text/javascript" src="js/coustem.js"></script> -->
    

</body>




</html>

