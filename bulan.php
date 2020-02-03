<?php
function bulan ($bln)
                            {
                                switch ($bln) {
                                    case '1': $bln="Januari";
                                        break;
                                    case '2': $bln="Februari";
                                        break;
                                    case '3': $bln="Maret";
                                        break;
                                    case '4': $bln="April";
                                        break;
                                    case '5': $bln="Mei";
                                        break;
                                    case '6': $bln="Juni";
                                        break;
                                    case '7': $bln="Juli";
                                        break;
                                    case '8': $bln="Agustus";
                                        break;
                                    case '9': $bln="September";
                                        break;
                                    case '10': $bln="Oktober";
                                        break;
                                    case '11': $bln="November";
                                        break;
                                    case '12': $bln="Desember";
                                        break;
                                                                  
                                }
                            return $bln;

                            }

?>