<!DOCTYPE html>
<html lang="en">


<?php

    include './db/db.php';
    

?>
<head>
    

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
            <?php include 'top.php';
            	  
                $cid=$_GET['id'];
             
            
                $str="SELECT * FROM catering WHERE id='$cid'";

                $query=mysqli_query($con,$str);
                while($result=mysqli_fetch_array($query))
                {
                    $name=$result['cname'];
                    $description=$result['cdescription'];
                    $price =$result['ccost'];
                    $type = $result['ctype'];
                    
                    $image = $result['cimage'];
                    $image2 = $result['cimage2'];
                    $image3 = $result['cimage3'];
                    $image4 = $result['cimage4'];
                    $image5 = $result['cimage5'];
                    $image6 = $result['cimage6'];
                }
                

?>
           
        </header>
        
        <section class="content">
        	
        	<div class="search-resultPage">
            	
                <div class="container">
                

                	<div class="row">
                    	<div class="col-lg-12 col-sm-12 col-md-12">
                        	<div class="hotel-info tab-content">
                            	<h2>About the <?php echo $name; ?>  </h2>
                                <div class="inner-info">
                                    <p><h4><b>Food Combo Includes :</b><br> <?php echo $description; ?> </h4></p> 
                                    
                                </div>
                            </div>

                            <div class="photo-gallery tab-content">
                            	<h2>Photo Gallery</h2>
                                <div class="gallery-view">
                                	<div class="row">
                                    	<div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/catering/<?php echo $image; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/catering/<?php echo $image; ?>" height="267px" width="241px"  alt="">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/catering/<?php echo $image2; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/catering/<?php echo $image2; ?>" height="267px" width="241px"  alt="">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/catering/<?php echo $image3; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/catering/<?php echo $image3; ?>" height="267px" width="241px" alt="">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                                <a href="pimages/catering/<?php echo $image4; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                                    <img src="pimages/catering/<?php echo $image4; ?>" height="267px" width="241px"  alt="">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/catering/<?php echo $image5; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/catering/<?php echo $image5; ?>" height="267px" width="241px"  alt="">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/catering/<?php echo $image6; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/catering/<?php echo $image6; ?>" height="267px" width="241px"  alt="">
                                                </a>
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

