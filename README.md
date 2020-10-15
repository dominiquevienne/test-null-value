# test-null-value
This repository will try to determine which code is the best to test if a value is null
## Results on my computer
Code results are the following on my computer using the PHP CLI

    Checking 3000000000 times x 3
    
    Testing $value === null: 21.434537887573s
    Testing $value === null: 21.564932823181s
    Testing $value === null: 20.216790914536s
    
    Testing null === $value: 22.929952144623s
    Testing null === $value: 21.845438957214s
    Testing null === $value: 20.787739992142s
    
    Testing is_null($value): 17.667958974838s
    Testing is_null($value): 18.875331163406s
    Testing is_null($value): 20.101562976837s
    
    Testing empty($value): 23.507313966751s
    Testing empty($value): 19.054686069489s
    Testing empty($value): 18.982324123383s
