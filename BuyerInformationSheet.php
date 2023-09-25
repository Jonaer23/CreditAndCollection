 <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                .checkbox-label {
                    display: inline-block;
                    width: 100px; /* Adjust the width as needed */
                }
                
                .checkbox-input {
                    display: inline-block;
                    width: auto;
                }
            </style>
        </head>
        <body>
            <div style="padding: 12px; width: 100%">
                <div style="width: 35%; float:left">
                    <div style="font-size: 9px; line-height: 1;">
                        <p style="margin: 0">Head Office: #84 National Road, Putatan, Muntinlupa City</p>
                        <p style="margin: 0">Tel. Nos.: (02) 861-40-63/64; (02) 861-94-76 ; (02) 861-95-40</p>
                        <p style="margin: 0">Mobile Nos.: (0949) 885-9311  / (0917)883-8372</p>
                        <p style="margin: 0">Fax No: (02) 861-6152</p>
                        <p style="margin: 0">Website: www.centennial.ph</p>
                        <p style="margin: 0">Email Address: sales@centennial.ph</p>
                    </div>
                    <br>
                    <div style="font-size: 9px; line-height: 1">
                        <p style="margin: 0">Centennial Garden Barangay Macabling,</p>
                        <p style="margin: 0">City of Sta. Rosa, Laguna</p>
                        <p style="margin: 0">Tel. Nos.; (049) 634-92-06</p>
                        <p style="margin: 0">Mobile Nos.; (0918) 888-8884 / (0917) 883-8354</p>
                    </div>
                </div>
                <div style="width: 35%; float:left">
                    <table class="table table-bordered" style="border:none; width: 100%"
                                        cellspacing="0">
                        <tbody>
                            <tr>
                            <td style="font-size: 10px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px; text-align: center; border: none;">
                                <img src="https://centennialgarden.ph/SSDCAdmin180231/img/SouthSpring.png" alt="SouthSpring">
                            </td>
                            <tr>
                                <td style="font-size: 15px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none; background: radial-gradient(darkorange, orange); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Centennial <img src="https://centennialgarden.ph/SSDCAdmin180231/img/centenial.png" alt="Centenial"> Garden <br></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="width: 25%; float:right; " >
                    <div style="font-size: 9px; line-height: 1; border: 1px solid; width: 60%; padding: 5px">
                        <p style="margin: 0" >SSDI-SF-SMD-005</p>
                        <p style="margin: 0">REVISION</p>
                        <p style="margin: 0">EFFECTIVITY 101.11.08</p>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
            <div style="padding: 12px; width: 100%;">
                <div style="padding-right: 24px">
                    <table style="width: 100%; ">
                        <tbody>
                        <tr style="border: 1px solid">
                            <td style="border: 1px solid">
                                <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">Customer Code</p>
                            </td>
                            <td style="border: 1px solid">
                                 <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">Contract Code</p>
                            </td>
                            <td style="border: 1px solid">
                                <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">Date</p>
                            </td>
                        </tr>
                        <tr style="border: 1px solid">
                            <td style="border: 1px solid">
                                <p style=" font-size: 12px; padding-left: 5px"><?php echo $customerCode; ?></p>
                            </td>
                            <td style="border: 1px solid">
                                <p style=" font-size: 12px; padding-left: 5px"><?php echo $clientName; ?></p>
                            </td>
                            <td style="border: 1px solid">
                                <p style=" font-size: 12px; padding-left: 5px"><?php echo $dateCreated; ?></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; margin-top: 10px">
                        <thead>
                            <tr>
                                <th style="background-color: #008080; color: white; padding: 5px 10px"><p style=" font-size: 12px">PERSONAL REFERENCE</p></th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid">
                                <td style="border: 1px solid">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold"> FULLNAME</p>
                                </td>
                               
                            </tr>
                            <tr style="border: 1px solid">
                                <td style="border: 1px solid" >
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $fullname; ?></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%">
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid">
                                <td style="border: 1px solid;width: 80%">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">RESIDENCE ADDRESS</p>
                                </td>
                                <td style="border: 1px solid; width: 20%">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">RESIDENCE SINCE</p>
                                </td>
                            </tr>
                            <tr style="border: 1px solid">
                                <td style="border: 1px solid"  >
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $residenceAddress; ?></p>
                                </td>
                                 <td style="border: 1px solid"  >
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $residenceSince; ?></p>
                                </td>
                            </tr>
                            <tr style="border: 1px solid">
                                <td style="border: 1px solid" colspan="2">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">BILLING ADDRESS</p>
                                </td>
                            </tr>
                            <tr style="border: 1px solid">
                                <td style="border: 1px solid"  colspan="2">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $billingAddress; ?></p>
                                </td>
                                
                            </tr>
                            
                            <tr style="border: 1px solid">
                                 <td style="border: 1px solid" colspan="3">
                                    <p style="font-weight: bold">COMMUNITY TAX CERTIFICATE NO.</p>
                                </td>
                            </tr>
                            <tr style="border: 1px solid">
                                <td style="border: 1px solid"  >
                                     <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">ISSUED AT</p>
                                </td>
                                 <td style="border: 1px solid" colspan="2">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">ISSUED ON</p>
                                </td>
                            </tr>
                            
                            <tr style="border: 1px solid">
                                <td style="border: 1px solid"  >
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $issuedAt; ?></p>
                                </td>
                                 <td style="border: 1px solid" colspan="2">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $issuedOn; ?></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; width: 20%">
                                <td style="border: 1px solid">
                                  <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">SEX</p> 
                                </td>
                                <td style="border: 1px solid; width: 20%">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">DATE OF BIRTH</p> 
                                </td>
                                <td style="border: 1px solid; width: 20%">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">CITIZENSHIP</p> 
                                </td>
                                <td style="border: 1px solid; width: 20%">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">HEIGHT</p> 
                                </td>
                                <td style="border: 1px solid; width: 20%">
                                  <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">WEIGHT</p> 
                                </td>
                            </tr>
                            
                            <tr style="border: 1px solid">
                                 <td style="border: 1px solid; width: 20%">
                                  <p style=" font-size: 12px; padding-left: 5px"><?php echo $sex; ?></p>
                                </td>
                                <td style="border: 1px solid; width: 20%">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $dateofBirth; ?></p>
                                </td>
                                <td style="border: 1px solid; width: 20%">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $citizenship; ?></p>
                                </td>
                                <td style="border: 1px solid; width: 20%">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $height; ?></p>
                                </td>
                                <td style="border: 1px solid; width: 20%">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $weight; ?></p>
                                </td>
                               
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">GSIS/SSS NO.</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $sss; ?></p>
                                </td>
                                <td style="border: 1px solid;">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">HDMF NO.</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                      <p style=" font-size: 12px; padding-left: 5px"><?php echo $HFMF; ?></p> 
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">TIN</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $TIN; ?></p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">NBI</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                      <p style=" font-size: 12px; padding-left: 5px"><?php echo $NBI; ?> </p> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">MARITAL STATUS</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $maritalStatus; ?> </p> 
                                </td>
                                <td style="border: 1px solid;">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">DO YOU HAVE A PRE-NUPTIAL AGREEMENT ?</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $preNuptial; ?> </p> 
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th colspan="4" style="background-color: #008080; color: white; padding: 5px 10px"><p>CONTACT INFORMATION</p></th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                  <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">RESIDENTIAL PHONE</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">MOBILE PHONE</p> 
                                </td>
                                <td style="border: 1px solid;">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">BUSINESS PHONE / FAX NO.</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">EMAIL ADDRESS</p> 
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $residentialPhone; ?>  </p>
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $mobilePhone; ?>  </p>
                                </td>
                                <td style="border: 1px solid;">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $businessPhone; ?>  </p>
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $emailAddress; ?></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th colspan="4" style="background-color: #008080; color: white; padding: 5px 10px"><p>INFORMATION OF IMMEDIATE FAMILY</p></th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                  <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">SPOUSE NAME</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $spouseName; ?></p> 
                                </td>
                                <td style="border: 1px solid;">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">OCCUPATION</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                      <p style=" font-size: 12px; padding-left: 5px"><?php echo $spouseOccupation; ?></p>
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">NAME OF FATHER</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $fatherName; ?> </p> 
                                </td>
                                <td style="border: 1px solid;">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">OCCUPATION</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                      <p style=" font-size: 12px; padding-left: 5px"><?php echo $fatherOccupation; ?></p>  
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">NAME OF MOTHER</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $motherName; ?> </p> 
                                </td>
                                <td style="border: 1px solid;">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">OCCUPATION</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $motherOccupation; ?> </p>  
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid"  colspan="2">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">CHILDRENS NAME</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">DATE OF BIRTH</p>   
                                </td>
                                <td style="border: 1px solid;">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">AGE</p>  
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid" colspan="2">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $childrenName; ?>  </p>
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $dateOfBirthChildren; ?> </p>
                                </td>
                                <td style="border: 1px solid;">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $age; ?> </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th colspan="3" style="background-color: #008080; color: white; padding: 5px 10px"><p>FINANCIAL INFORMATION</p></th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">EMPLOYMENT STATUS</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">SOURCE OF INCOME/FUNDS</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                     <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">EMPLOYER  OR BUSINESS NAME (IF SELF-EMPLOYED)</p> 
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $employmentStatus; ?> </p> 
                                </td>
                                <td style="border: 1px solid; ">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $sourceOfIncome; ?></p> 
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $employerBusinessName; ?> </p> 
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid; " colspan="2">
                                     <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">NATURE OF EMPLOYERS BUSINESS / YOUR BUSINESS</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                      <p style=" font-size: 12px; padding-left: 5px"><?php echo $natureBusiness; ?></p>   
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid; ">
                                     <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">POSITION IN COMPANY</p>  
                                </td>
                                 <td style="border: 1px solid; " colspan="2">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $positionInCompany; ?> </p> 
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                               
                                <td style="border: 1px solid; " colspan="2">
                                     <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">EMPLOYMENT DATE/ DATE WHEN BUSINESS WAS ESTABLISHED</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $employmentDate; ?></p>   
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th colspan="2" style="background-color: #008080; color: white; padding: 5px 10px"><p>OPTIONAL</p></th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">DO YOU OWN MEMORIAL PLOT (S) / BONE CRYPT (S) ?</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $memorialPlot; ?></p>  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th style="background-color: #008080; color: white; padding: 5px 10px"><p style=" font-size: 12px; font-weight: bold">NAME OF MEMORIAL PARK</p></th>
                                <th style="background-color: #008080; color: white; padding: 5px 10px"><p style=" font-size: 12px; font-weight: bold">SINCE</p></th>
                                <th style="background-color: #008080; color: white; padding: 5px 10px"><p style=" font-size: 12px; font-weight: bold">LOCATION</p></th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                    <p style="font-size: 12px; padding-left: 5px"><?php echo $namememorialPlot; ?>  </p>
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $sincememorialPlot; ?> </p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $locationmemorialPlot; ?> </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th colspan="7" style="background-color: #008080; color: white; padding: 5px 10px"><p>OFFICE USE ONLY</p></th>
                            </tr>
                            <tr>
                                <th colspan="7" style="background-color: GRAY; color: white; padding: 5px 10px"><p>LOT DESCRIPTION</p></th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 10px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid;width: auto;">
                                   <p style=" font-size: 12px; padding-left: 5px">LOT I.D.</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                   <p style=" font-size: 12px; padding-left: 5px">AREA</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                   <p style=" font-size: 12px; padding-left: 5px">SECTION</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                   <p style=" font-size: 12px; padding-left: 5px">PHASE</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                   <p style=" font-size: 12px; padding-left: 5px">TYPE</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                   <p style=" font-size: 12px; padding-left: 5px">CLASS</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                  <p style=" font-size: 12px; padding-left: 5px">NO. LOT</p> 
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid;width: auto;">
                                   <p style=" font-size: 12px; padding-left: 5px"> <?php echo $lotID; ?></p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $lotArea; ?></p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $section; ?></p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $lotphase; ?> </p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $lottype; ?></p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $lotclass; ?></p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $lotno; ?></p>   
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th colspan="8" style="background-color: GRAY; color: white; padding: 5px 10px"><p>CRYPT DESCRIPTION</p></th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 10px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid;width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px">CRYPT I.D.</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px">PHASE</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px">LEVEL</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px">AREA</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px">SECTION</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px">COLUMN</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px">UNIT NO.</p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px">CLASS</p> 
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid;width: auto;">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $cryptID; ?> </p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $cryptPhase; ?> </p>  
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                    <p style=" font-size: 12px; padding-left: 5px"><?php echo $cryptLevel; ?> </p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $cryptArea; ?> </p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $cryptSection; ?> </p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                      <p style=" font-size: 12px; padding-left: 5px"><?php echo $cryptColumn; ?> </p> 
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                      <p style=" font-size: 12px; padding-left: 5px"><?php echo $unitNo; ?> </p>  
                                </td>
                                <td style="border: 1px solid; width: auto;">
                                     <p style=" font-size: 12px; padding-left: 5px"><?php echo $cryptClass; ?></p> 
                                </td>
                             
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">TOTAL CONTRACT PRICE</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                  <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">TERMS</p>
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">INITIAL PAYMENT</p>
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $lotTCP; ?></p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $lotTerms; ?></p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $initialPayment; ?></p> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">PAYMENT DUE DATE</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                  <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">STARTING</p>
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px; font-weight: bold">PRICELIST</p>
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $paymentDuedate; ?></p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $initialPayment; ?></p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <p style=" font-size: 12px; padding-left: 5px"><?php echo $listprice; ?></p> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                     <table style="width: 100%; table-layout: fixed;">
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid; border: none ">
                                   <p>I hereby certify that the facts contained in this form are true to the best of my knowledge.</p> 
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid; border: none ">
                                   <input style="width: 80%; border-bottom: 1px solid; border-top: none; border-right: none; border-left: none"> 
                                </td>
                                 <td style="border: 1px solid; border: none ">
                                   <input style="width: 80%; border-bottom: 1px solid; border-top: none; border-right: none; border-left: none"> 
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid;  border: none ">
                                   <p style=" font-size: 12px; padding-left: 5px">BUYERS SIGNATURE OVER PRINTED NAME</p> 
                                </td>
                                 <td style="border: 1px solid;  border: none ">
                                   <p style=" font-size: 12px; padding-left: 5px">SALES AGENT SIGNATURE OVER PRINTED NAME</p> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                     <table style="width: 100%; table-layout: fixed;">
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid; padding: 20px 5px; text-align: justify; font-weight: bold">
                                   <p >IMPORTANT: ONLY PAYMENTS REMITED THROUGH OUT AUTHORIZED OFFICE CASHIERS ARE VALID. FURTHER, ENSURE THAT ALL PAYMENTS HAVE CORRESPONDING OFFICIAL RECEIPT. THE COMPANY WILL NOT BE LIABLE AND RESPONSIBLE TO ANY PAYMENTS REMITTED THROUGH OUR LICENSED REAL ESTATE SALES PERSON.</p> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; table-layout: fixed;">
                        <tbody style="font-size: 12px">
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid" colspan="2">
                                   <p style=" font-size: 12px; padding-left: 5px">ENCODED BY :</p> 
                                </td>
                                <td style="border: 1px solid; " colspan="2">
                                   <p style=" font-size: 12px; padding-left: 5px">CHECKED BY :</p> 
                                </td>
                                <td style="border: 1px solid; " colspan="2">
                                   <p style=" font-size: 12px; padding-left: 5px">EVALUATED BY :</p> 
                                </td>
                                <td style="border: 1px solid; " colspan="2">
                                   <p style=" font-size: 12px; padding-left: 5px">APPROVED BY :</p> 
                                </td>
                            </tr>
                            <tr style="border: 1px solid; ">
                                <td style="border: 1px solid" colspan="2">
                                   <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid; " colspan="2">
                                   <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid; " colspan="2">
                                   <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid; " colspan="2">
                                   <input style="width: 100%">
                                </td>
                            </tr>
                             <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                   <p style=" font-size: 12px; padding-left: 5px">DATE :</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px">DATE :</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                    <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid">
                                    <p style=" font-size: 12px; padding-left: 5px">DATE :</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                   <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px">DATE :</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                   <input style="width: 100%">
                                </td>
                            </tr>
                             <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                   <p style=" font-size: 12px; padding-left: 5px">TIME :</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px">TIME :</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                    <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid">
                                    <p style=" font-size: 12px; padding-left: 5px">TIME :</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                   <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px">TIME :</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                   <input style="width: 100%">
                                </td>
                            </tr>
                             <tr style="border: 1px solid; ">
                                <td style="border: 1px solid">
                                   <p style=" font-size: 12px; padding-left: 5px">REMARKS :</p> 
                                </td>
                                <td style="border: 1px solid; ">
                                   <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px">REMARKS :</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                    <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid">
                                    <p style=" font-size: 12px; padding-left: 5px">REMARKS :</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                   <input style="width: 100%">
                                </td>
                                <td style="border: 1px solid; ">
                                    <p style=" font-size: 12px; padding-left: 5px">REMARKS :</p>  
                                </td>
                                <td style="border: 1px solid; ">
                                   <input style="width: 100%">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
        
    </html>