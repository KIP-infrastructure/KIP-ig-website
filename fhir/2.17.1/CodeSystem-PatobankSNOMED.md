# Den Danske SNOMED for Patologi - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Den Danske SNOMED for Patologi**

## CodeSystem: Den Danske SNOMED for Patologi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED | *Version*:2.17.1 |
| Active as of 2022-06-07 | *Computable Name*:PatobankSNOMED |

 
Den Danske SNOMED for Patologi - Udvalgte koder i RKKP. Link: https://www.patobank.dk/snomed/ 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CytogeneticCancerChangesALD](ValueSet-CytogeneticCancerChangesALD.md)
* [DiagnoseCLL](ValueSet-DiagnoseCLL.md)
* [PatobankSNOMEDCytogenetikMDS](ValueSet-PatobankSNOMEDCytogenetikMDS.md)
* [PatobankSNOMEDDMPNDiagnose](ValueSet-PatobankSNOMEDDMPNDiagnose.md)
* [PatobankSNOMEDDiagnoserLYFO](ValueSet-PatobankSNOMEDDiagnoserLYFO.md)
* [PatobankSNOMEDLeukemiaDiagnose](ValueSet-PatobankSNOMEDLeukemiaDiagnose.md)
* [PatobankSNOMEDMDSDiagnose](ValueSet-PatobankSNOMEDMDSDiagnose.md)
* [PatobankSNOMEDpTNMpM](ValueSet-PatobankSNOMEDpTNMpM.md)
* [PatobankSNOMEDpTNMpN](ValueSet-PatobankSNOMEDpTNMpN.md)
* [PatobankSNOMEDpTNMpT](ValueSet-PatobankSNOMEDpTNMpT.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "PatobankSNOMED",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
  "version" : "2.17.1",
  "name" : "PatobankSNOMED",
  "title" : "Den Danske SNOMED for Patologi",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Den Danske SNOMED for Patologi - Udvalgte koder i RKKP. Link: https://www.patobank.dk/snomed/",
  "caseSensitive" : true,
  "content" : "fragment",
  "concept" : [
    {
      "code" : "M96103",
      "display" : "B-cellelymfom",
      "definition" : "B-cellelymfom"
    },
    {
      "code" : "M96503",
      "display" : "Hodgkin lymfom, klassisk type",
      "definition" : "Hodgkin lymfom, klassisk type"
    },
    {
      "code" : "M96513",
      "display" : "Hodgkin lymfom, klassisk type, lymfocytrig",
      "definition" : "Hodgkin lymfom, klassisk type, lymfocytrig"
    },
    {
      "code" : "M96523",
      "display" : "Hodgkin lymfom, klassisk type, mixed cellularitet",
      "definition" : "Hodgkin lymfom, klassisk type, mixed cellularitet"
    },
    {
      "code" : "M96533",
      "display" : "Hodgkin lymfom, klassisk type, lymfocytdepleteret",
      "definition" : "Hodgkin lymfom, klassisk type, lymfocytdepleteret"
    },
    {
      "code" : "M96593",
      "display" : "Hodgkin lymfom, nodulær, lymfocyt dominans",
      "definition" : "Hodgkin lymfom, nodulær, lymfocyt dominans"
    },
    {
      "code" : "M96633",
      "display" : "Hodgkin lymfom, klassisk type, nodulær sklerose",
      "definition" : "Hodgkin lymfom, klassisk type, nodulær sklerose"
    },
    {
      "code" : "M96703",
      "display" : "Småcellet lymfocytært lymfom",
      "definition" : "Småcellet lymfocytært lymfom"
    },
    {
      "code" : "M96783",
      "display" : "primært effusionslymfom",
      "definition" : "primært effusionslymfom"
    },
    {
      "code" : "M96793",
      "display" : "mediastinalt storcellet B-cellelymfom",
      "definition" : "mediastinalt storcellet B-cellelymfom"
    },
    {
      "code" : "M96873",
      "display" : "Burkitt lymfom",
      "definition" : "Burkitt lymfom"
    },
    {
      "code" : "M968H3",
      "display" : "high-grade B-lymfom",
      "definition" : "high-grade B-lymfom"
    },
    {
      "code" : "M968I3",
      "display" : "high-grade B-lymfom med MYC og BCL2 og/eller BCL6 rearr.",
      "definition" : "high-grade B-lymfom med MYC og BCL2 og/eller BCL6 rearr."
    },
    {
      "code" : "M96903",
      "display" : "follikulært lymfom",
      "definition" : "follikulært lymfom"
    },
    {
      "code" : "M96993",
      "display" : "marginalzone B-cellelymfom",
      "definition" : "marginalzone B-cellelymfom"
    },
    {
      "code" : "M97003",
      "display" : "mycosis fungoides",
      "definition" : "mycosis fungoides"
    },
    {
      "code" : "M97013",
      "display" : "Sezarys syndrom",
      "definition" : "Sezarys syndrom"
    },
    {
      "code" : "M97023",
      "display" : "perifert T-cellelymfom",
      "definition" : "perifert T-cellelymfom"
    },
    {
      "code" : "M97053",
      "display" : "angioimmunoblastisk T-cellelymfom",
      "definition" : "angioimmunoblastisk T-cellelymfom"
    },
    {
      "code" : "M97083",
      "display" : "subkutant panniculit-lignende T-cellelymfom",
      "definition" : "subkutant panniculit-lignende T-cellelymfom"
    },
    {
      "code" : "M97143",
      "display" : "anaplastisk storcellet lymfom",
      "definition" : "anaplastisk storcellet lymfom"
    },
    {
      "code" : "M97163",
      "display" : "hepatosplenisk T-cellelymfom",
      "definition" : "hepatosplenisk T-cellelymfom"
    },
    {
      "code" : "M97173",
      "display" : "enteropati-associeret T-cellelymfom",
      "definition" : "enteropati-associeret T-cellelymfom"
    },
    {
      "code" : "M97183",
      "display" : "primært kutant anaplastisk storcellet lymfom",
      "definition" : "primært kutant anaplastisk storcellet lymfom"
    },
    {
      "code" : "M97193",
      "display" : "ekstranodalt NK/T-cellelymfom, nasal type",
      "definition" : "ekstranodalt NK/T-cellelymfom, nasal type"
    },
    {
      "code" : "M97263",
      "display" : "primært kutant gamma-delta T-cellelymfom",
      "definition" : "primært kutant gamma-delta T-cellelymfom"
    },
    {
      "code" : "M97293",
      "display" : "precursor T-lymfoblastisk lymfom",
      "definition" : "precursor T-lymfoblastisk lymfom"
    },
    {
      "code" : "M97353",
      "display" : "plasmablastisk lymfom",
      "definition" : "plasmablastisk lymfom"
    },
    {
      "code" : "M97373",
      "display" : "storcellet B-cellelymfom, ALK-positivt",
      "definition" : "storcellet B-cellelymfom, ALK-positivt"
    },
    {
      "code" : "M96713",
      "display" : "Lymfoplasmacytært lymfom",
      "definition" : "Lymfoplasmacytært lymfom"
    },
    {
      "code" : "M96733",
      "display" : "Mantlecellelymfom",
      "definition" : "Mantlecellelymfom"
    },
    {
      "code" : "M96803",
      "display" : "Diffust storcellet B-cellelymfom",
      "definition" : "Diffust storcellet B-cellelymfom"
    },
    {
      "code" : "M96893",
      "display" : "Splenisk marginalzone B-cellelymfom",
      "definition" : "Splenisk marginalzone B-cellelymfom"
    },
    {
      "code" : "M97283",
      "display" : "Precursor B-lymfoblastisk lymfom",
      "definition" : "Precursor B-lymfoblastisk lymfom"
    },
    {
      "code" : "M98013",
      "display" : "akut udifferentieret leukæmi",
      "definition" : "akut udifferentieret leukæmi"
    },
    {
      "code" : "M98053",
      "display" : "akut leukæmi af ubestemmelig celletype",
      "definition" : "akut leukæmi af ubestemmelig celletype"
    },
    {
      "code" : "M98063",
      "display" : "bl. fænotype akut leukæmi m. t(9;22); BCR-ABL1",
      "definition" : "bl. fænotype akut leukæmi m. t(9;22); BCR-ABL1"
    },
    {
      "code" : "M98073",
      "display" : "bl. fænotype akut leukæmi m. t(v;11q); KMT2A rearr.",
      "definition" : "bl. fænotype akut leukæmi m. t(v;11q); KMT2A rearr."
    },
    {
      "code" : "M98143",
      "display" : "B-lymfobl. leukæmi/lymfom m. t(12;21); ETV6-RUNX1",
      "definition" : "B-lymfobl. leukæmi/lymfom m. t(12;21); ETV6-RUNX1"
    },
    {
      "code" : "M98153",
      "display" : "B-lymfobl. leukæmi/lymfom med hyperdiploidi",
      "definition" : "B-lymfobl. leukæmi/lymfom med hyperdiploidi"
    },
    {
      "code" : "M98173",
      "display" : "B-lymfobl. leukæmi/lymfom m. t(5;14); IgH/IL3",
      "definition" : "B-lymfobl. leukæmi/lymfom m. t(5;14); IgH/IL3"
    },
    {
      "code" : "M98183",
      "display" : "B-lymfobl. leukæmi/lymfom m. t(1;19); TCF3-PBX1",
      "definition" : "B-lymfobl. leukæmi/lymfom m. t(1;19); TCF3-PBX1"
    },
    {
      "code" : "M98233",
      "display" : "kronisk lymfocytær leukæmi",
      "definition" : "kronisk lymfocytær leukæmi"
    },
    {
      "code" : "M98273",
      "display" : "adult T-cellelymfom/leukæmi",
      "definition" : "adult T-cellelymfom/leukæmi"
    },
    {
      "code" : "M98353",
      "display" : "precursor B-lymfoblastisk leukæmi",
      "definition" : "precursor B-lymfoblastisk leukæmi"
    },
    {
      "code" : "M98373",
      "display" : "precursor T-lymfoblastisk leukæmi",
      "definition" : "precursor T-lymfoblastisk leukæmi"
    },
    {
      "code" : "M98403",
      "display" : "erytroleukæmi (FAB-type M6)",
      "definition" : "erytroleukæmi (FAB-type M6)"
    },
    {
      "code" : "M98613",
      "display" : "akut myeloid leukæmi",
      "definition" : "akut myeloid leukæmi"
    },
    {
      "code" : "M98653",
      "display" : "AML m. t(6;9); DEK-NUP214",
      "definition" : "AML m. t(6;9); DEK-NUP214"
    },
    {
      "code" : "M98663",
      "display" : "akut promyelocyt leukæmi m. t(15;17); PML-RARa",
      "definition" : "akut promyelocyt leukæmi m. t(15;17); PML-RARa"
    },
    {
      "code" : "M98673",
      "display" : "akut myelomonocytær leukæmi",
      "definition" : "akut myelomonocytær leukæmi"
    },
    {
      "code" : "M98693",
      "display" : "AML m inv(3)(q21q26.2)el t(3;3)(q21;q26.2);RPN1-EVI1",
      "definition" : "AML m inv(3)(q21q26.2)el t(3;3)(q21;q26.2);RPN1-EVI1"
    },
    {
      "code" : "M98703",
      "display" : "akut basofil leukæmi",
      "definition" : "akut basofil leukæmi"
    },
    {
      "code" : "M98713",
      "display" : "AML m. inv(16) el. t(16;16); CBFß-MYH11",
      "definition" : "AML m. inv(16) el. t(16;16); CBFß-MYH11"
    },
    {
      "code" : "M98723",
      "display" : "Akut myeloid leukæmi, minimalt differentieret",
      "definition" : "Akut myeloid leukæmi, minimalt differentieret"
    },
    {
      "code" : "M98733",
      "display" : "Akut myeloid leukæmi, uden modning",
      "definition" : "Akut myeloid leukæmi, uden modning"
    },
    {
      "code" : "M98743",
      "display" : "Akut myeloid leukæmi, med modning",
      "definition" : "Akut myeloid leukæmi, med modning"
    },
    {
      "code" : "M98753",
      "display" : "Kronisk myeloid leukæmi, BCR-ABL1 positiv",
      "definition" : "Kronisk myeloid leukæmi, BCR-ABL1 positiv"
    },
    {
      "code" : "M98913",
      "display" : "Akut monoblastisk/monocytær leukæmi",
      "definition" : "Akut monoblastisk/monocytær leukæmi"
    },
    {
      "code" : "M98953",
      "display" : "AML m. myelodysplasi-relaterede forandringer",
      "definition" : "AML m. myelodysplasi-relaterede forandringer"
    },
    {
      "code" : "M98963",
      "display" : "AML m. t(8;21); RUNX1-RUNX1T1",
      "definition" : "AML m. t(8;21); RUNX1-RUNX1T1"
    },
    {
      "code" : "M98973",
      "display" : "AML m. t(9;11); KMT2A-MLLT3",
      "definition" : "AML m. t(9;11); KMT2A-MLLT3"
    },
    {
      "code" : "M99103",
      "display" : "akut megakaryoblastleukæmi",
      "definition" : "akut megakaryoblastleukæmi"
    },
    {
      "code" : "M99113",
      "display" : "AML(megakaryoblastisk)m t(1;22)(p13;q13);RBM15-MLK1",
      "definition" : "AML(megakaryoblastisk)m t(1;22)(p13;q13);RBM15-MLK1"
    },
    {
      "code" : "M99203",
      "display" : "terapirelateret myeloid neoplasi",
      "definition" : "terapirelateret myeloid neoplasi"
    },
    {
      "code" : "M99303",
      "display" : "myeloidt sarkom",
      "definition" : "myeloidt sarkom"
    },
    {
      "code" : "M99313",
      "display" : "panmyeloid proliferation med myelofibrose",
      "definition" : "panmyeloid proliferation med myelofibrose"
    },
    {
      "code" : "M99453",
      "display" : "kronisk myelomonocytær leukæmi",
      "definition" : "kronisk myelomonocytær leukæmi"
    },
    {
      "code" : "M99503",
      "display" : "polycytæmia vera",
      "definition" : "polycytæmia vera"
    },
    {
      "code" : "M99613",
      "display" : "myelofibrose",
      "definition" : "myelofibrose"
    },
    {
      "code" : "M99623",
      "display" : "essentiel trombocytæmi",
      "definition" : "essentiel trombocytæmi"
    },
    {
      "code" : "M99711",
      "display" : "post-transplantation lymfoproliferativ sygdom",
      "definition" : "post-transplantation lymfoproliferativ sygdom"
    },
    {
      "code" : "M99753",
      "display" : "uklassificerbar myelodysplastisk/myeloproliferativ sygdom",
      "definition" : "uklassificerbar myelodysplastisk/myeloproliferativ sygdom"
    },
    {
      "code" : "M99803",
      "display" : "MDS med unilinie dysplasi",
      "definition" : "MDS med unilinie dysplasi"
    },
    {
      "code" : "M99823",
      "display" : "MDS med ringsideroblaster og unilinie dysplasi",
      "definition" : "MDS med ringsideroblaster og unilinie dysplasi"
    },
    {
      "code" : "M99833",
      "display" : "MDS med overskud af blaster",
      "definition" : "MDS med overskud af blaster"
    },
    {
      "code" : "M99853",
      "display" : "MDS med multilineær dysplasi",
      "definition" : "MDS med multilineær dysplasi"
    },
    {
      "code" : "M99863",
      "display" : "MDS med isoleret del(5q) kromosomafvigelse",
      "definition" : "MDS med isoleret del(5q) kromosomafvigelse"
    },
    {
      "code" : "M99893",
      "display" : "myelodysplastisk syndrom",
      "definition" : "myelodysplastisk syndrom"
    },
    {
      "code" : "AEF1810",
      "display" : "pTis",
      "definition" : "ÆF1810 - pTis"
    },
    {
      "code" : "AEF1820",
      "display" : "pT0",
      "definition" : "ÆF1820 - pT0"
    },
    {
      "code" : "AEF1830",
      "display" : "pT1",
      "definition" : "ÆF1830 - pT1"
    },
    {
      "code" : "AEF1831",
      "display" : "pT1a",
      "definition" : "ÆF1831 - pT1a"
    },
    {
      "code" : "AEF1832",
      "display" : "pT1b",
      "definition" : "ÆF1832 - pT1b"
    },
    {
      "code" : "AEF1840",
      "display" : "pT2",
      "definition" : "ÆF1840 - pT2"
    },
    {
      "code" : "AEF1850",
      "display" : "pT3",
      "definition" : "ÆF1850 - pT3"
    },
    {
      "code" : "AEF1860",
      "display" : "pT4",
      "definition" : "ÆF1860 - pT4"
    },
    {
      "code" : "AEF1861",
      "display" : "pT4a",
      "definition" : "ÆF1861 - pT4a"
    },
    {
      "code" : "AEF1862",
      "display" : "pT4b",
      "definition" : "ÆF1862 - pT4b"
    },
    {
      "code" : "AEF1870",
      "display" : "pTx",
      "definition" : "ÆF1870 - pTx"
    },
    {
      "code" : "AEF1900",
      "display" : "pN0",
      "definition" : "ÆF1900 - pN0"
    },
    {
      "code" : "AEF1910",
      "display" : "pN1",
      "definition" : "ÆF1910 - pN1"
    },
    {
      "code" : "AEF1920",
      "display" : "pN2",
      "definition" : "ÆF1920 - pN2"
    },
    {
      "code" : "AEF1930",
      "display" : "pN3",
      "definition" : "ÆF1930 - pN3"
    },
    {
      "code" : "AEF1931",
      "display" : "pN3a",
      "definition" : "ÆF1931 - pN3a"
    },
    {
      "code" : "AEF1932",
      "display" : "pN3b",
      "definition" : "ÆF1932 - pN3b"
    },
    {
      "code" : "AEF1950",
      "display" : "pNx",
      "definition" : "ÆF1950 - pNx"
    },
    {
      "code" : "AEF2000",
      "display" : "pM0",
      "definition" : "ÆF2000 - pM0"
    },
    {
      "code" : "AEF2010",
      "display" : "pM1",
      "definition" : "ÆF2010 - pM1"
    }
  ]
}

```
