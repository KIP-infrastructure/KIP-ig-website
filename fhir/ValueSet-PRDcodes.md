# ERA PRD Codes - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ERA PRD Codes**

## ValueSet: ERA PRD Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PRDcodes | *Version*:2.13.0 |
| Active as of 2024-01-10 | *Computable Name*:PRDcodes |

 
European Renal Association (ERA) Primary Renal Disease (PRD) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "PRDcodes",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PRDcodes",
  "version" : "2.13.0",
  "name" : "PRDcodes",
  "title" : "ERA PRD Codes",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-01-10T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "European Renal Association (ERA)  Primary Renal Disease (PRD)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PRDcodes",
        "concept" : [
          {
            "code" : "prd2513",
            "display" : "2513 - AA amyloid secondary to chronic inflammation"
          },
          {
            "code" : "prd1768",
            "display" : "1768 - Acquired obstructive nephropathy due to neurogenic bladder"
          },
          {
            "code" : "prd1752",
            "display" : "1752 - Acquired obstructive uropathy / nephropathy "
          },
          {
            "code" : "prd3442",
            "display" : "3442 - Acute cortical necrosis"
          },
          {
            "code" : "prd3380",
            "display" : "3380 - Acute kidney injury"
          },
          {
            "code" : "prd3403",
            "display" : "3403 - Acute kidney injury due to circulatory failure"
          },
          {
            "code" : "prd3398",
            "display" : "3398 - Acute kidney injury due to hypovolaemia "
          },
          {
            "code" : "prd3435",
            "display" : "3435 - Acute kidney injury due to nephrotoxicity"
          },
          {
            "code" : "prd3426",
            "display" : "3426 - Acute kidney injury due to rhabdomyolysis"
          },
          {
            "code" : "prd3419",
            "display" : "3419 - Acute kidney injury due to sepsis"
          },
          {
            "code" : "prd3457",
            "display" : "3457 - Acute pyelonephritis"
          },
          {
            "code" : "prd2196",
            "display" : "2196 - Acute urate nephropathy - histologically proven"
          },
          {
            "code" : "prd2183",
            "display" : "2183 - Acute urate nephropathy - no histology"
          },
          {
            "code" : "prd1003",
            "display" : "1003 - Adult nephrotic syndrome - no histology"
          },
          {
            "code" : "prd2392",
            "display" : "2392 - Ageing kidney - no histology"
          },
          {
            "code" : "prd2521",
            "display" : "2521 - AL amyloid secondary to plasma cell dyscrasia"
          },
          {
            "code" : "prd3071",
            "display" : "3071 - Alagille syndrome"
          },
          {
            "code" : "prd2760",
            "display" : "2760 - Alport syndrome - histologically proven"
          },
          {
            "code" : "prd2756",
            "display" : "2756 - Alport syndrome - no histology"
          },
          {
            "code" : "prd1472",
            "display" : "1472 - Anti-Glomerular basement membrane (GBM) disease / Goodpasture's syndrome - histologically proven"
          },
          {
            "code" : "prd1464",
            "display" : "1464 - Anti-Glomerular basement membrane (GBM) disease / Goodpasture's syndrome - no histology"
          },
          {
            "code" : "prd3118",
            "display" : "3118 - Apparent mineralocorticoid excess"
          },
          {
            "code" : "prd1995",
            "display" : "1995 - Aristolochic acid nephropathy (Balkan / Chinese herb / endemic nephropathy) - histologically proven"
          },
          {
            "code" : "prd1982",
            "display" : "1982 - Aristolochic acid nephropathy (Balkan / Chinese herb / endemic nephropathy) - no histology"
          },
          {
            "code" : "prd2448",
            "display" : "2448 - Atheroembolic renal disease - histologically proven"
          },
          {
            "code" : "prd2430",
            "display" : "2430 - Atheroembolic renal disease - no histology"
          },
          {
            "code" : "prd2623",
            "display" : "2623 - Atypical haemolytic uraemic syndrome (HUS) - diarrhoea negative"
          },
          {
            "code" : "prd2718",
            "display" : "2718 - Autosomal dominant (AD) polycystic kidney disease"
          },
          {
            "code" : "prd2725",
            "display" : "2725 - Autosomal dominant (AD) polycystic kidney disease type I"
          },
          {
            "code" : "prd2739",
            "display" : "2739 - Autosomal dominant (AD) polycystic kidney disease type II"
          },
          {
            "code" : "prd2741",
            "display" : "2741 - Autosomal recessive (AR) polycystic kidney disease"
          },
          {
            "code" : "prd3085",
            "display" : "3085 - Bartter syndrome"
          },
          {
            "code" : "prd2773",
            "display" : "2773 - Benign familial haematuria"
          },
          {
            "code" : "prd1710",
            "display" : "1710 - Bladder exstrophy"
          },
          {
            "code" : "prd3322",
            "display" : "3322 - Branchio-oto-renal syndrome"
          },
          {
            "code" : "prd1845",
            "display" : "1845 - Calcium oxalate urolithiasis"
          },
          {
            "code" : "prd1832",
            "display" : "1832 - Calculus nephropathy / urolithiasis"
          },
          {
            "code" : "prd2482",
            "display" : "2482 - Cardiorenal syndrome"
          },
          {
            "code" : "prd2363",
            "display" : "2363 - Chronic hypertensive nephropathy - histologically proven"
          },
          {
            "code" : "prd2359",
            "display" : "2359 - Chronic hypertensive nephropathy - no histology"
          },
          {
            "code" : "prd3564",
            "display" : "3564 - Chronic kidney disease (CKD) / chronic renal failure (CRF) - aetiology uncertain / unknown - histologically proven"
          },
          {
            "code" : "prd3555",
            "display" : "3555 - Chronic kidney disease (CKD) / chronic renal failure (CRF) - aetiology uncertain / unknown - no histology"
          },
          {
            "code" : "prd3529",
            "display" : "3529 - Chronic kidney disease (CKD) / chronic renal failure (CRF) caused by tumour nephrectomy"
          },
          {
            "code" : "prd3540",
            "display" : "3540 - Chronic kidney disease (CKD) / chronic renal failure (CRF) due to donor nephrectomy"
          },
          {
            "code" : "prd3538",
            "display" : "3538 - Chronic kidney disease (CKD) / chronic renal failure (CRF) due to traumatic loss of kidney"
          },
          {
            "code" : "prd3708",
            "display" : "3708 - Chronic renal failure"
          },
          {
            "code" : "prd3643",
            "display" : "3643 - Chronic renal failure due to systemic infection"
          },
          {
            "code" : "prd2203",
            "display" : "2203 - Chronic urate nephropathy - histologically proven"
          },
          {
            "code" : "prd3636",
            "display" : "3636 - Chronic urate nephropathy - no histology"
          },
          {
            "code" : "prd1440",
            "display" : "1440 - Churg-Strauss syndrome - histologically proven"
          },
          {
            "code" : "prd1438",
            "display" : "1438 - Churg-Strauss syndrome - no histology"
          },
          {
            "code" : "prd1625",
            "display" : "1625 - Congenital dysplasia / hypoplasia"
          },
          {
            "code" : "prd2652",
            "display" : "2652 - Congenital haemolytic uraemic syndrome"
          },
          {
            "code" : "prd1088",
            "display" : "1088 - Congenital nephrotic syndrome (CNS) - congenital infection"
          },
          {
            "code" : "prd1057",
            "display" : "1057 - Congenital nephrotic syndrome (CNS) - diffuse mesangial sclerosis"
          },
          {
            "code" : "prd1042",
            "display" : "1042 - Congenital nephrotic syndrome (CNS) - Finnish type - histologically proven"
          },
          {
            "code" : "prd1035",
            "display" : "1035 - Congenital nephrotic syndrome (CNS) - Finnish type - no histology"
          },
          {
            "code" : "prd1061",
            "display" : "1061 - Congenital nephrotic syndrome (CNS) - focal segmental glomerulosclerosis"
          },
          {
            "code" : "prd1026",
            "display" : "1026 - Congenital nephrotic syndrome - no histology"
          },
          {
            "code" : "prd1706",
            "display" : "1706 - Congenital neurogenic bladder"
          },
          {
            "code" : "prd1660",
            "display" : "1660 - Congenital pelvi-ureteric junction obstruction"
          },
          {
            "code" : "prd1673",
            "display" : "1673 - Congenital vesico-ureteric junction obstruction"
          },
          {
            "code" : "prd1570",
            "display" : "1570 - Cryoglobulinaemia secondary to hepatitis C - histologically proven"
          },
          {
            "code" : "prd1562",
            "display" : "1562 - Cryoglobulinaemia secondary to hepatitis C - no histology"
          },
          {
            "code" : "prd1591",
            "display" : "1591 - Cryoglobulinaemia secondary to systemic disease - histologically proven"
          },
          {
            "code" : "prd1589",
            "display" : "1589 - Cryoglobulinaemia secondary to systemic disease - no histology"
          },
          {
            "code" : "prd2794",
            "display" : "2794 - Cystic kidney disease"
          },
          {
            "code" : "prd2964",
            "display" : "2964 - Cystinosis"
          },
          {
            "code" : "prd2955",
            "display" : "2955 - Cystinuria"
          },
          {
            "code" : "prd2929",
            "display" : "2929 - Dent disease"
          },
          {
            "code" : "prd1074",
            "display" : "1074 - Denys-Drash syndrome"
          },
          {
            "code" : "prd2328",
            "display" : "2328 - Diabetic nephropathy in type I diabetes - histologically proven"
          },
          {
            "code" : "prd2316",
            "display" : "2316 - Diabetic nephropathy in type I diabetes - no histology"
          },
          {
            "code" : "prd2344",
            "display" : "2344 - Diabetic nephropathy in type II diabetes - histologically proven"
          },
          {
            "code" : "prd2337",
            "display" : "2337 - Diabetic nephropathy in type II diabetes - no histology"
          },
          {
            "code" : "prd1331",
            "display" : "1331 - Diffuse endocapillary glomerulonephritis"
          },
          {
            "code" : "prd3028",
            "display" : "3028 - Distal renal tubular acidosis - type I"
          },
          {
            "code" : "prd3037",
            "display" : "3037 - Distal renal tubular acidosis with sensorineural deafness - gene mutations"
          },
          {
            "code" : "prd2005",
            "display" : "2005 - Drug-induced tubulointerstitial nephritis - no histology"
          },
          {
            "code" : "prd2014",
            "display" : "2014 - Drug-induced tubulointerstitial nephritis - histologically proven"
          },
          {
            "code" : "prd1850",
            "display" : "1850 - Enteric hyperoxaluria"
          },
          {
            "code" : "prd1558",
            "display" : "1558 - Essential mixed cryoglobulinaemia - histologically proven"
          },
          {
            "code" : "prd1543",
            "display" : "1543 - Essential mixed cryoglobulinaemia - no histology"
          },
          {
            "code" : "prd3230",
            "display" : "3230 - Fabry disease - histologically proven"
          },
          {
            "code" : "prd3224",
            "display" : "3224 - Fabry disease - no histology"
          },
          {
            "code" : "prd2545",
            "display" : "2545 - Familial amyloid secondary to protein mutations - histologically proven"
          },
          {
            "code" : "prd2532",
            "display" : "2532 - Familial amyloid secondary to protein mutations - no histology"
          },
          {
            "code" : "prd1308",
            "display" : "1308 - Familial focal segmental glomerulosclerosis (FSGS) - autosomal dominant - histologically proven"
          },
          {
            "code" : "prd1298",
            "display" : "1298 - Familial focal segmental glomerulosclerosis (FSGS) - autosomal dominant - no histology"
          },
          {
            "code" : "prd1280",
            "display" : "1280 - Familial focal segmental glomerulosclerosis (FSGS) - autosomal recessive - histologically proven"
          },
          {
            "code" : "prd1279",
            "display" : "1279 - Familial focal segmental glomerulosclerosis (FSGS) - autosomal recessive - no histology"
          },
          {
            "code" : "prd2668",
            "display" : "2668 - Familial haemolytic uraemic syndrome (HUS)"
          },
          {
            "code" : "prd3173",
            "display" : "3173 - Familial hypercalciuric hypocalcaemia"
          },
          {
            "code" : "prd3160",
            "display" : "3160 - Familial hypocalciuric hypercalcaemia"
          },
          {
            "code" : "prd3187",
            "display" : "3187 - Familial hypomagnesaemia"
          },
          {
            "code" : "prd1144",
            "display" : "1144 - Familial IgA nephropathy - histologically proven"
          },
          {
            "code" : "prd1137",
            "display" : "1137 - Familial IgA nephropathy - no histology"
          },
          {
            "code" : "prd1911",
            "display" : "1911 - Familial interstitial nephropathy - histologically proven"
          },
          {
            "code" : "prd1907",
            "display" : "1907 - Familial interstitial nephropathy - no histology"
          },
          {
            "code" : "prd3379",
            "display" : "3379 - Familial nephropathy"
          },
          {
            "code" : "prd1618",
            "display" : "1618 - Familial reflux nephropathy"
          },
          {
            "code" : "prd2675",
            "display" : "2675 - Familial thrombotic thrombocytopenic purpura(2675)"
          },
          {
            "code" : "prd2566",
            "display" : "2566 - Familial AA amyloid secondary to familial Mediterranean fever / TRAPS (Hibernian fever) - histologically proven"
          },
          {
            "code" : "prd2550",
            "display" : "2550 - Familial AA amyloid secondary to familial Mediterranean fever / TRAPS (Hibernian fever) - no histology"
          },
          {
            "code" : "prd2453",
            "display" : "2453 - Fibromuscular dysplasia of renal artery"
          },
          {
            "code" : "prd1354",
            "display" : "1354 - Focal and segmental proliferative glomerulonephritis"
          },
          {
            "code" : "prd3754",
            "display" : "3754 - Focal segmental glomerulosclerosis (FSGS) secondary to HIV "
          },
          {
            "code" : "prd3765",
            "display" : "3765 - Focal segmental glomerulosclerosis (FSGS) secondary to lithium "
          },
          {
            "code" : "prd1320",
            "display" : "1320 - Focal segmental glomerulosclerosis (FSGS) secondary to obesity - histologically proven"
          },
          {
            "code" : "prd1312",
            "display" : "1312 - Focal segmental glomerulosclerosis (FSGS) secondary to obesity - no histology"
          },
          {
            "code" : "prd3777",
            "display" : "3777 - Focal segmental glomerulosclerosis secondary to sickle cell"
          },
          {
            "code" : "prd3314",
            "display" : "3314 - Frasier syndrome"
          },
          {
            "code" : "prd3092",
            "display" : "3092 - Gitelman syndrome"
          },
          {
            "code" : "prd1656",
            "display" : "1656 - Glomerulocystic disease"
          },
          {
            "code" : "prd1377",
            "display" : "1377 - Glomerulonephritis - histologically indeterminate"
          },
          {
            "code" : "prd3749",
            "display" : "3749 - Glomerulonephritis - no histology"
          },
          {
            "code" : "prd1365",
            "display" : "1365 - Glomerulonephritis - secondary to systemic disease"
          },
          {
            "code" : "prd3125",
            "display" : "3125 - Glucocorticoid suppressible hyperaldosteronism"
          },
          {
            "code" : "prd1417",
            "display" : "1417 - Granulomatosis with polyangiitis - histologically proven"
          },
          {
            "code" : "prd1401",
            "display" : "1401 - Granulomatosis with polyangiitis - no histology"
          },
          {
            "code" : "prd3572",
            "display" : "3572 - Haematuria and proteinuria - no histology"
          },
          {
            "code" : "prd2610",
            "display" : "2610 - Haemolytic uraemic syndrome (HUS) - diarrhoea associated"
          },
          {
            "code" : "prd2647",
            "display" : "2647 - Haemolytic uraemic syndrome (HUS) secondary to systemic disease"
          },
          {
            "code" : "prd2257",
            "display" : "2257 - Hantavirus nephropathy"
          },
          {
            "code" : "prd1515",
            "display" : "1515 - Henoch-Schönlein purpura / nephritis - histologically proven"
          },
          {
            "code" : "prd1504",
            "display" : "1504 - Henoch-Schönlein purpura / nephritis - no histology"
          },
          {
            "code" : "prd2495",
            "display" : "2495 - Hepatorenal syndrome"
          },
          {
            "code" : "prd3305",
            "display" : "3305 - Horse-shoe kidney"
          },
          {
            "code" : "prd3662",
            "display" : "3662 - Hypercalcaemic nephropathy"
          },
          {
            "code" : "prd2993",
            "display" : "2993 - Hypophosphataemic rickets autosomal recessive (AR)"
          },
          {
            "code" : "prd2986",
            "display" : "2986 - Hypophosphataemic rickets X-linked (XL)"
          },
          {
            "code" : "prd1251",
            "display" : "1251 - Idiopathic rapidly progressive (crescentic) glomerulonephritis"
          },
          {
            "code" : "prd1813",
            "display" : "1813 - Idiopathic retroperitoneal fibrosis"
          },
          {
            "code" : "prd1128",
            "display" : "1128 - IgA nephropathy - histologically proven"
          },
          {
            "code" : "prd1116",
            "display" : "1116 - IgA nephropathy - no histology"
          },
          {
            "code" : "prd1163",
            "display" : "1163 - IgA nephropathy secondary to liver cirrhosis - histologically proven"
          },
          {
            "code" : "prd1159",
            "display" : "1159 - IgA nephropathy secondary to liver cirrhosis - no histology"
          },
          {
            "code" : "prd1171",
            "display" : "1171 - IgM - associated nephropathy"
          },
          {
            "code" : "prd2606",
            "display" : "2606 - Immunotactoid / fibrillary nephropathy"
          },
          {
            "code" : "prd3823",
            "display" : "3823 - Infiltration by lymphoma - histologically proven"
          },
          {
            "code" : "prd3139",
            "display" : "3139 - Inherited / genetic diabetes mellitus type II"
          },
          {
            "code" : "prd2940",
            "display" : "2940 - Inherited aminoaciduria"
          },
          {
            "code" : "prd2972",
            "display" : "2972 - Inherited renal glycosuria"
          },
          {
            "code" : "prd2407",
            "display" : "2407 - Ischaemic nephropathy - no histology"
          },
          {
            "code" : "prd2411",
            "display" : "2411 - Ischaemic nephropathy / microvascular disease - histologically proven"
          },
          {
            "code" : "prd3712",
            "display" : "3712 - Isolated haematuria - no histology"
          },
          {
            "code" : "prd3720",
            "display" : "3720 - Isolated proteinuria - no histology"
          },
          {
            "code" : "prd3810",
            "display" : "3810 - Kidney stones due to ARPT deficiency"
          },
          {
            "code" : "prd3461",
            "display" : "3461 - Kidney tumour"
          },
          {
            "code" : "prd3351",
            "display" : "3351 - Lawrence-Moon-Biedl / Bardet-Biedl syndrome"
          },
          {
            "code" : "prd2177",
            "display" : "2177 - Lead induced nephropathy - histologically proven"
          },
          {
            "code" : "prd2165",
            "display" : "2165 - Lead induced nephropathy - no histology"
          },
          {
            "code" : "prd2242",
            "display" : "2242 - Leptospirosis"
          },
          {
            "code" : "prd3059",
            "display" : "3059 - Lesch Nyhan syndrome - hypoxanthine guanine phosphoribosyl transferase deficiency"
          },
          {
            "code" : "prd3102",
            "display" : "3102 - Liddle syndrome"
          },
          {
            "code" : "prd2597",
            "display" : "2597 - Light chain deposition disease"
          },
          {
            "code" : "prd2938",
            "display" : "2938 - Lowe syndrome (oculocerebrorenal syndrome)"
          },
          {
            "code" : "prd1866",
            "display" : "1866 - Magnesium ammonium phosphate (struvite) urolithiasis"
          },
          {
            "code" : "prd2385",
            "display" : "2385 - Malignant hypertensive nephropathy / accelerated hypertensive nephropathy - histologically proven"
          },
          {
            "code" : "prd2371",
            "display" : "2371 - Malignant hypertensive nephropathy / accelerated hypertensive nephropathy - no histology"
          },
          {
            "code" : "prd2804",
            "display" : "2804 - Medullary cystic kidney disease type I"
          },
          {
            "code" : "prd2815",
            "display" : "2815 - Medullary cystic kidney disease type II"
          },
          {
            "code" : "prd3295",
            "display" : "3295 - Medullary sponge kidneys"
          },
          {
            "code" : "prd1723",
            "display" : "1723 - Megacystis-megaureter"
          },
          {
            "code" : "prd1205",
            "display" : "1205 - Membranous nephropathy - drug induced"
          },
          {
            "code" : "prd1185",
            "display" : "1185 - Membranous nephropathy - idiopathic"
          },
          {
            "code" : "prd1214",
            "display" : "1214 - Membranous nephropathy - infection associated"
          },
          {
            "code" : "prd1192",
            "display" : "1192 - Membranous nephropathy - malignancy associated"
          },
          {
            "code" : "prd1349",
            "display" : "1349 - Mesangial proliferative glomerulonephritis "
          },
          {
            "code" : "prd1222",
            "display" : "1222 - Mesangiocapillary glomerulonephritis type 1"
          },
          {
            "code" : "prd1233",
            "display" : "1233 - Mesangiocapillary glomerulonephritis type 2 (dense deposit disease)"
          },
          {
            "code" : "prd1246",
            "display" : "1246 - Mesangiocapillary glomerulonephritis type 3"
          },
          {
            "code" : "prd3501",
            "display" : "3501 - Mesoblastic nephroma - histologically proven"
          },
          {
            "code" : "prd1429",
            "display" : "1429 - Microscopic polyangiitis - histologically proven"
          },
          {
            "code" : "prd1100",
            "display" : "1100 - Minimal change nephropathy - histologically proven"
          },
          {
            "code" : "prd1090",
            "display" : "1090 - Minimal change nephropathy - no histology"
          },
          {
            "code" : "prd3367",
            "display" : "3367 - Mitochondrial cytopathy"
          },
          {
            "code" : "prd1639",
            "display" : "1639 - Multicystic dysplastic kidneys"
          },
          {
            "code" : "prd2584",
            "display" : "2584 - Myeloma cast nephropathy - histologically proven"
          },
          {
            "code" : "prd2578",
            "display" : "2578 - Myeloma kidney - no histology"
          },
          {
            "code" : "prd3253",
            "display" : "3253 - Nail-patella syndrome"
          },
          {
            "code" : "prd3044",
            "display" : "3044 - Nephrogenic diabetes insipidus"
          },
          {
            "code" : "prd2836",
            "display" : "2836 - Nephronophthisis"
          },
          {
            "code" : "prd2843",
            "display" : "2843 - Nephronophthisis - type 1 (juvenile type)"
          },
          {
            "code" : "prd2858",
            "display" : "2858 - Nephronophthisis - type 2 (infantile type)"
          },
          {
            "code" : "prd2862",
            "display" : "2862 - Nephronophthisis - type 3 (adolescent type)"
          },
          {
            "code" : "prd2870",
            "display" : "2870 - Nephronophthisis - type 4 (juvenile type)"
          },
          {
            "code" : "prd2889",
            "display" : "2889 - Nephronophthisis - type 5"
          },
          {
            "code" : "prd2891",
            "display" : "2891 - Nephronophthisis - type 6"
          },
          {
            "code" : "prd2098",
            "display" : "2098 - Nephropathy due to aminoglycosides - histologically proven"
          },
          {
            "code" : "prd2080",
            "display" : "2080 - Nephropathy due to aminoglycosides - no histology"
          },
          {
            "code" : "prd2112",
            "display" : "2112 - Nephropathy due to amphotericin - histologically proven"
          },
          {
            "code" : "prd2108",
            "display" : "2108 - Nephropathy due to amphotericin - no histology"
          },
          {
            "code" : "prd2033",
            "display" : "2033 - Nephropathy due to analgesic drugs - histologically proven"
          },
          {
            "code" : "prd2022",
            "display" : "2022 - Nephropathy due to analgesic drugs - no histology"
          },
          {
            "code" : "prd2051",
            "display" : "2051 - Nephropathy due to ciclosporin - histologically proven"
          },
          {
            "code" : "prd2046",
            "display" : "2046 - Nephropathy due to ciclosporin - no histology"
          },
          {
            "code" : "prd2131",
            "display" : "2131 - Nephropathy due to cisplatin - histologically proven"
          },
          {
            "code" : "prd2120",
            "display" : "2120 - Nephropathy due to cisplatin - no histology"
          },
          {
            "code" : "prd2681",
            "display" : "2681 - Nephropathy due to eclampsia"
          },
          {
            "code" : "prd2154",
            "display" : "2154 - Nephropathy due to lithium - histologically proven"
          },
          {
            "code" : "prd2149",
            "display" : "2149 - Nephropathy due to lithium - no histology"
          },
          {
            "code" : "prd3834",
            "display" : "3834 - Nephropathy due to pre-eclampsia"
          },
          {
            "code" : "prd2079",
            "display" : "2079 - Nephropathy due to tacrolimus - histologically proven"
          },
          {
            "code" : "prd2067",
            "display" : "2067 - Nephropathy due to tacrolimus - no histology"
          },
          {
            "code" : "prd2288",
            "display" : "2288 - Nephropathy related to HIV - histologically proven"
          },
          {
            "code" : "prd2274",
            "display" : "2274 - Nephropathy related to HIV - no histology"
          },
          {
            "code" : "prd3615",
            "display" : "3615 - Nephrotic syndrome of childhood - no trial of steroids - no histology"
          },
          {
            "code" : "prd3604",
            "display" : "3604 - Nephrotic syndrome of childhood - steroid resistant - no histology"
          },
          {
            "code" : "prd1019",
            "display" : "1019 - Nephrotic syndrome of childhood - steroid sensitive - no histology"
          },
          {
            "code" : "prd1799",
            "display" : "1799 - Obstructive nephropathy due to bladder cancer"
          },
          {
            "code" : "prd1809",
            "display" : "1809 - Obstructive nephropathy due to other malignancies"
          },
          {
            "code" : "prd1781",
            "display" : "1781 - Obstructive nephropathy due to prostate cancer"
          },
          {
            "code" : "prd1775",
            "display" : "1775 - Obstructive nephropathy due to prostatic hypertrophy"
          },
          {
            "code" : "prd1734",
            "display" : "1734 - Oligomeganephronia"
          },
          {
            "code" : "prd2300",
            "display" : "2300 - Other specific infection"
          },
          {
            "code" : "prd3063",
            "display" : "3063 - Phosphoribosyl pyrophosphate synthetase (PRPPS) superactivity"
          },
          {
            "code" : "prd1455",
            "display" : "1455 - Polyarteritis nodosa"
          },
          {
            "code" : "prd1687",
            "display" : "1687 - Posterior urethral valves"
          },
          {
            "code" : "prd2901",
            "display" : "2901 - Primary Fanconi syndrome"
          },
          {
            "code" : "prd1267",
            "display" : "1267 - Primary focal segmental glomerulosclerosis (FSGS)"
          },
          {
            "code" : "prd3194",
            "display" : "3194 - Primary hyperoxaluria"
          },
          {
            "code" : "prd3207",
            "display" : "3207 - Primary hyperoxaluria type I"
          },
          {
            "code" : "prd3211",
            "display" : "3211 - Primary hyperoxaluria type II"
          },
          {
            "code" : "prd3731",
            "display" : "3731 - Primary hyperoxaluria type III"
          },
          {
            "code" : "prd1602",
            "display" : "1602 - Primary reflux nephropathy - sporadic"
          },
          {
            "code" : "prd3000",
            "display" : "3000 - Primary renal tubular acidosis (RTA)"
          },
          {
            "code" : "prd3016",
            "display" : "3016 - Proximal renal tubular acidosis (RTA) - type II"
          },
          {
            "code" : "prd3141",
            "display" : "3141 - Pseudohypoaldosteronism type 1"
          },
          {
            "code" : "prd3156",
            "display" : "3156 - Pseudohypoaldosteronism type 2 (Gordon syndrome)"
          },
          {
            "code" : "prd2219",
            "display" : "2219 - Radiation nephritis"
          },
          {
            "code" : "prd2226",
            "display" : "2226 - Renal / perinephric abscess"
          },
          {
            "code" : "prd2509",
            "display" : "2509 - Renal amyloidosis"
          },
          {
            "code" : "prd2469",
            "display" : "2469 - Renal arterial thrombosis / occlusion"
          },
          {
            "code" : "prd2424",
            "display" : "2424 - Renal artery stenosis"
          },
          {
            "code" : "prd3474",
            "display" : "3474 - Renal cell carcinoma - histologically proven"
          },
          {
            "code" : "prd3658",
            "display" : "3658 - Renal coloboma syndrome"
          },
          {
            "code" : "prd3627",
            "display" : "3627 - Renal cysts and diabetes syndrome"
          },
          {
            "code" : "prd1641",
            "display" : "1641 - Renal dysplasia due to fetal ACE-inhibitor exposure"
          },
          {
            "code" : "prd3691",
            "display" : "3691 - Renal failure"
          },
          {
            "code" : "prd1747",
            "display" : "1747 - Renal papillary necrosis"
          },
          {
            "code" : "prd3796",
            "display" : "3796 - Renal papillary necrosis caused by analgesics"
          },
          {
            "code" : "prd3783",
            "display" : "3783 - Renal papillary necrosis caused by diabetes"
          },
          {
            "code" : "prd3806",
            "display" : "3806 - Renal papillary necrosis caused by sickle cell"
          },
          {
            "code" : "prd1976",
            "display" : "1976 - Renal sarcoidosis - histologically proven"
          },
          {
            "code" : "prd1969",
            "display" : "1969 - Renal sarcoidosis - no histology"
          },
          {
            "code" : "prd1536",
            "display" : "1536 - Renal scleroderma / systemic sclerosis - histologically proven"
          },
          {
            "code" : "prd1527",
            "display" : "1527 - Renal scleroderma / systemic sclerosis - no histology"
          },
          {
            "code" : "prd2235",
            "display" : "2235 - Renal tuberculosis"
          },
          {
            "code" : "prd2476",
            "display" : "2476 - Renal vein thrombosis"
          },
          {
            "code" : "prd3689",
            "display" : "3689 - Retroperitoneal fibrosis secondary to drugs"
          },
          {
            "code" : "prd1821",
            "display" : "1821 - Retroperitoneal fibrosis secondary to malignancies"
          },
          {
            "code" : "prd3670",
            "display" : "3670 - Retroperitoneal fibrosis secondary to peri-aortitis"
          },
          {
            "code" : "prd3269",
            "display" : "3269 - Rubinstein-Taybi syndrome"
          },
          {
            "code" : "prd2290",
            "display" : "2290 - Schistosomiasis"
          },
          {
            "code" : "prd2702",
            "display" : "2702 - Sickle cell nephropathy - histologically proven"
          },
          {
            "code" : "prd2699",
            "display" : "2699 - Sickle cell nephropathy - no histology"
          },
          {
            "code" : "prd3517",
            "display" : "3517 - Single kidney identified in adulthood"
          },
          {
            "code" : "prd1694",
            "display" : "1694 - Syndrome of agenesis of abdominal muscles - prune belly syndrome"
          },
          {
            "code" : "prd1493",
            "display" : "1493 - Systemic lupus erythematosus / nephritis - histologically proven"
          },
          {
            "code" : "prd1486",
            "display" : "1486 - Systemic lupus erythematosus / nephritis - no histology"
          },
          {
            "code" : "prd1383",
            "display" : "1383 - Systemic vasculitis - ANCA negative - histologically proven"
          },
          {
            "code" : "prd3847",
            "display" : "3847 - Systemic vasculitis - ANCA negative - no histology"
          },
          {
            "code" : "prd3852",
            "display" : "3852 - Systemic vasculitis - ANCA positive - histologically proven"
          },
          {
            "code" : "prd1396",
            "display" : "1396 - Systemic vasculitis - ANCA positive - no histology"
          },
          {
            "code" : "prd2787",
            "display" : "2787 - Thin basement membrane disease"
          },
          {
            "code" : "prd2634",
            "display" : "2634 - Thrombotic thrombocytopenic purpura (TTP)"
          },
          {
            "code" : "prd3346",
            "display" : "3346 - Townes-Brocks syndrome"
          },
          {
            "code" : "prd3488",
            "display" : "3488 - Transitional cell carcinoma - histologically proven"
          },
          {
            "code" : "prd3276",
            "display" : "3276 - Tuberous sclerosis"
          },
          {
            "code" : "prd2917",
            "display" : "2917 - Tubular disorder as part of inherited metabolic diseases"
          },
          {
            "code" : "prd1897",
            "display" : "1897 - Tubulointerstitial nephritis - histologically proven"
          },
          {
            "code" : "prd1884",
            "display" : "1884 - Tubulointerstitial nephritis - no histology"
          },
          {
            "code" : "prd1930",
            "display" : "1930 - Tubulointerstitial nephritis associated with autoimmune disease - histologically proven"
          },
          {
            "code" : "prd1924",
            "display" : "1924 - Tubulointerstitial nephritis associated with autoimmune disease - no histology"
          },
          {
            "code" : "prd1953",
            "display" : "1953 - Tubulointerstitial nephritis with uveitis (TINU) - histologically proven"
          },
          {
            "code" : "prd1948",
            "display" : "1948 - Tubulointerstitial nephritis with uveitis (TINU) - no histology"
          },
          {
            "code" : "prd1878",
            "display" : "1878 - Uric acid urolithiasis"
          },
          {
            "code" : "prd2827",
            "display" : "2827 - Uromodulin-associated nephropathy (familial juvenile hyperuricaemic nephropathy)"
          },
          {
            "code" : "prd3282",
            "display" : "3282 - Von Hippel-Lindau disease"
          },
          {
            "code" : "prd3333",
            "display" : "3333 - Williams syndrome"
          },
          {
            "code" : "prd3490",
            "display" : "3490 - Wilms tumour - histologically proven"
          },
          {
            "code" : "prd3248",
            "display" : "3248 - Xanthinuria"
          },
          {
            "code" : "prd2261",
            "display" : "2261 - Xanthogranulomatous pyelonephritis"
          }
        ]
      }
    ]
  }
}

```
