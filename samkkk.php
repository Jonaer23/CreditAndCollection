
<script>
        
        function cryptMA() {
            let cryptNoOfMonths=  document.getElementById("cryptNoOfMonths").value;
            let cryptlotListPrice=  document.getElementById("cryptlotListPrice").value;
            let cryptbalance  =  document.getElementById("cryptbalance").value;
            let crypttaxs1  =  document.getElementById("crypttaxs1").value;
            let cryptpcf  =  document.getElementById("cryptpcf").value;
            let cryptsubtotaltax  =  document.getElementById("cryptsubtotaltax").value;
            let cryptdpPercentage2  =  document.getElementById("cryptdpPercentage2").value;
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
    
            if (cryptNoOfMonths == "121") {
            document.getElementById("cryptfactorratePercentage").value = "16";
            document.getElementById("cryptfactorrate").value = "0.0907308578592074";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, '');  
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0907308578592074)+((parseFloat(newStr3) *  0.0907308578592074) * crypttaxs1))-(newStr3subtotaltax/12); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0907308578592074) * 12) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else if (cryptNoOfMonths == "241") {
           
            document.getElementById("cryptfactorratePercentage").value = "17";
            document.getElementById("cryptfactorrate").value = "0.0494422640854967";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0494422640854967)+((parseFloat(newStr3) *  0.0494422640854967) * crypttaxs1))-(newStr3subtotaltax/24); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0494422640854967) * 24) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else if (cryptNoOfMonths == "361") {
           
            document.getElementById("cryptfactorratePercentage").value = "18";
            document.getElementById("cryptfactorrate").value = "0.036152395535917";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.036152395535917)+((parseFloat(newStr3) *  0.036152395535917) * crypttaxs1))-(newStr3subtotaltax/36); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.036152395535917) * 36) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else if (cryptNoOfMonths == "481") {
            document.getElementById("cryptfactorratePercentage").value = "20";
            document.getElementById("cryptfactorrate").value = "0.030430362343858";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.030430362343858)+((parseFloat(newStr3) *  0.030430362343858) * crypttaxs1))-(newStr3subtotaltax/48); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.030430362343858) * 48) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
    
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else if (cryptNoOfMonths == "601") { 
            document.getElementById("cryptfactorratePercentage").value = "22";
            document.getElementById("cryptfactorrate").value = "0.0276189120353598";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0276189120353598)+((parseFloat(newStr3) *  0.0276189120353598) * crypttaxs1))-(newStr3subtotaltax/60); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0276189120353598) * 60) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
               
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
    
            } 
            else if (cryptNoOfMonths == "721") {
            document.getElementById("cryptfactorratePercentage").value = "24";
            document.getElementById("cryptfactorrate").value = "0.0263268307088938";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0263268307088938)+((parseFloat(newStr3) *  0.0263268307088938) * crypttaxs1))-(newStr3subtotaltax/72); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0263268307088938) * 72) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
    
            } 
            else if (cryptNoOfMonths == "841") {
            
            document.getElementById("cryptfactorratePercentage").value = "24";
            document.getElementById("cryptfactorrate").value = "0.0246758117819474";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0246758117819474)+((parseFloat(newStr3) *  0.0246758117819474) * crypttaxs1))-(newStr3subtotaltax/84); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0246758117819474) * 84) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else if (cryptNoOfMonths == "961") {
            document.getElementById("cryptfactorratePercentage").value = "24";
            document.getElementById("cryptfactorrate").value = "0.0235131274809127";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0235131274809127)+((parseFloat(newStr3) *  0.0235131274809127) * crypttaxs1))-(newStr3subtotaltax/96); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0235131274809127) * 96) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
    
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
    
            } 
            else if (cryptNoOfMonths == "1081") {      
            document.getElementById("cryptfactorratePercentage").value = "24";
            document.getElementById("cryptfactorrate").value = "0.0226708482940114";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0226708482940114)+((parseFloat(newStr3) *  0.0226708482940114) * crypttaxs1))-(newStr3subtotaltax/108); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0226708482940114) * 108) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
    
            } 
            else if (cryptNoOfMonths == "1201") {
            
            document.getElementById("cryptfactorratePercentage").value = "24";
            document.getElementById("cryptfactorrate").value = "0.022048096885833";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.022048096885833)+((parseFloat(newStr3) *  0.022048096885833) * crypttaxs1))-(newStr3subtotaltax/120); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.022048096885833) * 120) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
    
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else{
              
                // Discount
               
                let discount =  document.getElementById("cryptdiscounts1").value;
                var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
                var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
                var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
                var subtotalDiscount = (parseFloat(newStr3llp) + parseFloat(newStr3subtotaltax))* parseFloat(discount);
                let monthlyInstallment = (parseFloat(newStr3llp) + parseFloat(newStr3pcf) + parseFloat(newStr3subtotaltax)) - parseFloat(subtotalDiscount); 
                const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
                replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                document.getElementById("crypttotalContractPrice3").value = "₱ " +  replacedmonthlyInstallment1fixed;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
                document.getElementById("cryptfactorratePercentage").value = "";
                document.getElementById("cryptfactorrate").value = "";
    
            
            }
    
    
      
         }
         
    
            </script>