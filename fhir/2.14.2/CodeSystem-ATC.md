# WHO ATC - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **WHO ATC**

## CodeSystem: WHO ATC 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ATC | *Version*:2.14.2 |
| Active as of 2022-06-14 | *Computable Name*:ATC |
| *Other Identifiers:*urn:oid:2.16.840.1.113883.6.73 | |

 
WHO ATC code system. Link: http://www.whocc.no/atc 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ATCAntibiotikaprofylakseDKR](ValueSet-ATCAntibiotikaprofylakseDKR.md)
* [ATCChemoCLL](ValueSet-ATCChemoCLL.md)
* [ATCChemoPreparation](ValueSet-ATCChemoPreparation.md)
* [ATCDMPN](ValueSet-ATCDMPN.md)
* [ATCDMPN202410](ValueSet-ATCDMPN202410.md)
* [ATCImmunotherapyCLL](ValueSet-ATCImmunotherapyCLL.md)
* [ATCTargetCLL](ValueSet-ATCTargetCLL.md)
* [ATCTromboseprofylakseDKR](ValueSet-ATCTromboseprofylakseDKR.md)
* [AntibiotikaprofylakseDHR](ValueSet-AntibiotikaprofylakseDHR.md)
* [AntibiotikaprofylakseDKRR](ValueSet-AntibiotikaprofylakseDKRR.md)
* [BehandlingCML](ValueSet-BehandlingCML.md)
* [BehandlingCMMLMDS](ValueSet-BehandlingCMMLMDS.md)
* [BehandlingMDS](ValueSet-BehandlingMDS.md)
* [BehandlingsTypeStamcellestoetteLYFO](ValueSet-BehandlingsTypeStamcellestoetteLYFO.md)
* [BloedningsprofylakseDHR](ValueSet-BloedningsprofylakseDHR.md)
* [Immunoterapi](ValueSet-Immunoterapi.md)
* [Kemoterapiregime](ValueSet-Kemoterapiregime.md)
* [Radioimmunoterapi](ValueSet-Radioimmunoterapi.md)
* [TreatmentPreservation](ValueSet-TreatmentPreservation.md)
* [TreatmentScheduledDAMYDA](ValueSet-TreatmentScheduledDAMYDA.md)

This case-sensitive code system `https://kip.rkkp.dk/fhir/CodeSystem/ATC` provides **a fragment** that includes following codes in an undefined hierarchy:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ATC",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
  "identifier" : [
    {
      "value" : "urn:oid:2.16.840.1.113883.6.73"
    }
  ],
  "version" : "2.14.2",
  "name" : "ATC",
  "title" : "WHO ATC",
  "status" : "active",
  "date" : "2022-06-14T00:00:00+02:00",
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
  "description" : "WHO ATC code system. Link: http://www.whocc.no/atc",
  "caseSensitive" : true,
  "content" : "fragment",
  "concept" : [
    {
      "code" : "B01A",
      "display" : "ANTITHROMBOTIC AGENTS",
      "definition" : "B01A - ANTITHROMBOTIC AGENTS",
      "concept" : [
        {
          "code" : "B01AA03",
          "display" : "warfarin",
          "definition" : "B01AA03 - warfarin"
        },
        {
          "code" : "B01AB01",
          "display" : "heparin",
          "definition" : "B01AB01 - heparin"
        },
        {
          "code" : "B01AB04",
          "display" : "dalteparin",
          "definition" : "B01AB04 - dalteparin"
        },
        {
          "code" : "B01AB05",
          "display" : "enoxaparin",
          "definition" : "B01AB05 - enoxaparin"
        },
        {
          "code" : "B01AB10",
          "display" : "tinzaparin",
          "definition" : "B01AB10 - tinzaparin"
        },
        {
          "code" : "B01AC06",
          "display" : "acetylsalicylic acid",
          "definition" : "B01AC06 - acetylsalicylic acid"
        },
        {
          "code" : "B01AE07",
          "display" : "dabigatran etexilate",
          "definition" : "B01AE07 - dabigatran etexilate"
        },
        {
          "code" : "B01AF01",
          "display" : "rivaroxaban",
          "definition" : "B01AF01 - rivaroxaban"
        },
        {
          "code" : "B01AF02",
          "display" : "apixaban",
          "definition" : "B01AF02 - apixaban"
        },
        {
          "code" : "B01AX05",
          "display" : "fondaparinux",
          "definition" : "B01AX05 - fondaparinux"
        }
      ]
    },
    {
      "code" : "B02AA02",
      "display" : "tranexamic acid",
      "definition" : "B02AA02 - Tranexamic acid"
    },
    {
      "code" : "B03XA01",
      "display" : "erythropoietin",
      "definition" : "B03XA01 - erythropoietin"
    },
    {
      "code" : "C10AA",
      "display" : "HMG CoA reductase inhibitors",
      "definition" : "C10AA - HMG CoA reductase inhibitors"
    },
    {
      "code" : "H02",
      "display" : "CORTICOSTEROIDS FOR SYSTEMIC USE",
      "definition" : "H02 - CORTICOSTEROIDS FOR SYSTEMIC USE"
    },
    {
      "code" : "J01CF01",
      "display" : "dicloxacillin",
      "definition" : "J01CF01 - dicloxacillin"
    },
    {
      "code" : "J01CF02",
      "display" : "cloxacillin",
      "definition" : "J01CF02 - cloxacillin"
    },
    {
      "code" : "J01CF03",
      "display" : "meticillin",
      "definition" : "J01CF03 - meticillin"
    },
    {
      "code" : "J01CF05",
      "display" : "flucloxacillin",
      "definition" : "J01CF05 - flucloxacillin"
    },
    {
      "code" : "J01DB01",
      "display" : "cefalexin",
      "definition" : "J01DB01 - cefalexin"
    },
    {
      "code" : "J01DB03",
      "display" : "cefalotin",
      "definition" : "J01DB03 - cefalotin"
    },
    {
      "code" : "J01DC02",
      "display" : "cefuroxime",
      "definition" : "J01DC02 - cefuroxime"
    },
    {
      "code" : "J01FA01",
      "display" : "erythromycin",
      "definition" : "J01FA01 - erythromycin"
    },
    {
      "code" : "J01GB03",
      "display" : "gentamicin",
      "definition" : "J01GB03 - gentamicin"
    },
    {
      "code" : "J01XA01",
      "display" : "vancomycin",
      "definition" : "J01XA01 - vancomycin"
    },
    {
      "code" : "L01AA01",
      "display" : "cyclophosphamide",
      "definition" : "L01AA01 - cyclophosphamide"
    },
    {
      "code" : "L01AA02",
      "display" : "chlorambucil",
      "definition" : "L01AA02 - chlorambucil"
    },
    {
      "code" : "L01AA03",
      "display" : "melphalan",
      "definition" : "L01AA03 - melphalan"
    },
    {
      "code" : "L01AA06",
      "display" : "ifosfamide",
      "definition" : "L01AA06 - ifosfamide"
    },
    {
      "code" : "L01AA09",
      "display" : "bendamustine",
      "definition" : "L01AA09 - bendamustine"
    },
    {
      "code" : "L01AB01",
      "display" : "busulfan",
      "definition" : "L01AB01 - busulfan"
    },
    {
      "code" : "L01AC01",
      "display" : "thiotepa",
      "definition" : "L01AC01 thiotepa"
    },
    {
      "code" : "L01AD01",
      "display" : "carmustine",
      "definition" : "L01AD01 - carmustine"
    },
    {
      "code" : "L01AX03",
      "display" : "temozolomide",
      "definition" : "L01AX03 - temozolomide"
    },
    {
      "code" : "L01AX04",
      "display" : "dacarbazine",
      "definition" : "L01AX04 - dacarbazine"
    },
    {
      "code" : "L01BB05",
      "display" : "fludarabine",
      "definition" : "L01BB05 - fludarabine"
    },
    {
      "code" : "L01BC02",
      "display" : "fluorouracil",
      "definition" : "L01BC02 - Fluorouracil (5-FU)"
    },
    {
      "code" : "L01BC05",
      "display" : "gemcitabine",
      "definition" : "L01BC02 - Gemcitabine"
    },
    {
      "code" : "L01BC06",
      "display" : "capecitabine",
      "definition" : "L01BC06 - Capecitabine"
    },
    {
      "code" : "L01BC07",
      "display" : "azacitidine",
      "definition" : "L01BC07 - azacitidine"
    },
    {
      "code" : "L01CA02",
      "display" : "vincristine",
      "definition" : "L01CA02 - vincristine"
    },
    {
      "code" : "L01CA04",
      "display" : "vinorelbine",
      "definition" : "L01CA04 - Vinorelbine"
    },
    {
      "code" : "L01CB01",
      "display" : "etoposide",
      "definition" : "L01CB01 - etoposide"
    },
    {
      "code" : "L01CD01",
      "display" : "paclitaxel",
      "definition" : "L01CD01 - Paclitaxel"
    },
    {
      "code" : "L01CD02",
      "display" : "docetaxel",
      "definition" : "L01CD02 - Docetaxel"
    },
    {
      "code" : "L01CE02",
      "display" : "irinotecan",
      "definition" : "L01CE02 - Irinotecan"
    },
    {
      "code" : "L01DB01",
      "display" : "doxorubicin",
      "definition" : "L01DB01 - Doxorubicin"
    },
    {
      "code" : "L01DB03",
      "display" : "epirubicin",
      "definition" : "L01DB03 - Epirubicin"
    },
    {
      "code" : "L01DB07",
      "display" : "mitoxantrone",
      "definition" : "L01DB07 - mitoxantrone"
    },
    {
      "code" : "L01DB11",
      "display" : "pixantrone",
      "definition" : "L01DB11 - pixantrone"
    },
    {
      "code" : "L01DC01",
      "display" : "bleomycin",
      "definition" : "L01DC01 - bleomycin"
    },
    {
      "code" : "L01EA",
      "display" : "BCR-ABL tyrosine kinase inhibitors",
      "concept" : [
        {
          "code" : "L01EA01",
          "display" : "imatinib",
          "definition" : "L01EA01 - imatinib"
        },
        {
          "code" : "L01EA02",
          "display" : "dasatinib",
          "definition" : "L01EA02 - dasatinib"
        },
        {
          "code" : "L01EA03",
          "display" : "nilotinib",
          "definition" : "L01EA03 - nilotinib"
        },
        {
          "code" : "L01EA04",
          "display" : "bosutinib",
          "definition" : "L01EA04 - bosutinib"
        },
        {
          "code" : "L01EA05",
          "display" : "ponatinib",
          "definition" : "L01EA05 - ponatinib"
        },
        {
          "code" : "L01EA06",
          "display" : "Asciminib",
          "definition" : "L01EA06 - Asciminib"
        }
      ]
    },
    {
      "code" : "L01EB",
      "display" : "Epidermal growth factor receptor (EGFR) tyrosine kinase inhibitors",
      "definition" : "L01EB - Epidermal growth factor receptor (EGFR) tyrosine kinase inhibitors"
    },
    {
      "code" : "L01EH",
      "display" : "Human epidermal growth factor receptor 2 (HER2) tyrosine kinase inhibitors",
      "definition" : "L01EH - Human epidermal growth factor receptor 2 (HER2) tyrosine kinase inhibitors"
    },
    {
      "code" : "L01EJ",
      "display" : "Janus-associated kinase (JAK) inhibitors",
      "definition" : "Janus associerede kinase (JAK) hæmmere",
      "concept" : [
        {
          "code" : "L01EJ01",
          "display" : "ruxolitinib",
          "definition" : "L01EJ01 - ruxolitinib"
        }
      ]
    },
    {
      "code" : "L01EK",
      "display" : "Vascular endothelial growth factor receptor (VEGFR) tyrosine kinase inhibitors",
      "definition" : "L01EK - Vascular endothelial growth factor receptor (VEGFR) tyrosine kinase inhibitors"
    },
    {
      "code" : "L01EL01",
      "display" : "ibrutinib",
      "definition" : "L01EL01 - ibrutinib"
    },
    {
      "code" : "L01EL02",
      "display" : "acalabrutinib",
      "definition" : "L01EL02 - acalabrutinib"
    },
    {
      "code" : "L01EM01",
      "display" : "idelalisib",
      "definition" : "L01EM01 - idelalisib"
    },
    {
      "code" : "L01EN",
      "display" : "Fibroblast growth factor receptor (FGFR) tyrosine kinase inhibitors",
      "definition" : "L01EN - Fibroblast growth factor receptor (FGFR) tyrosine kinase inhibitors"
    },
    {
      "code" : "L01FA01",
      "display" : "rituximab",
      "definition" : "L01FA01 - rituximab"
    },
    {
      "code" : "L01FA02",
      "display" : "ofatumumab",
      "definition" : "L01FA02 - ofatumumab"
    },
    {
      "code" : "L01FA03",
      "display" : "obinutuzumab",
      "definition" : "L01FA03 - obinutuzumab"
    },
    {
      "code" : "L01FC01",
      "display" : "daratumumab",
      "definition" : "L01FC01 - daratumumab"
    },
    {
      "code" : "L01FC02",
      "display" : "isatuximab",
      "definition" : "L01FC02 - isatuximab"
    },
    {
      "code" : "L01FD01",
      "display" : "trastuzumab",
      "definition" : "L01FD01 - Trastuzumab"
    },
    {
      "code" : "L01FF",
      "display" : "PD-1/PDL-1 (Programmed cell death protein 1/death ligand 1) inhibitors",
      "definition" : "L01FF - PD-1/PDL-1 (Programmed cell death protein 1/death ligand 1) inhibitors",
      "concept" : [
        {
          "code" : "L01FF01",
          "display" : "nivolumab",
          "definition" : "L01FF01 - Nivolumab"
        },
        {
          "code" : "L01FF02",
          "display" : "pembrolizumab",
          "definition" : "L01FF02 - Pembrolizumab"
        }
      ]
    },
    {
      "code" : "L01FG01",
      "display" : "bevacizumab",
      "definition" : "L01FG01 - Bevacizumab"
    },
    {
      "code" : "L01FX05",
      "display" : "brentuximab vedotin",
      "definition" : "L01FX05 - brentuximab vedotin"
    },
    {
      "code" : "L01FX08",
      "display" : "elotuzumab",
      "definition" : "L01FX08 - elotuzumab"
    },
    {
      "code" : "L01FX14",
      "display" : "polatuzumab vedotin",
      "definition" : "L01FX14 - polatuzumab vedotin"
    },
    {
      "code" : "L01XA01",
      "display" : "cisplatin",
      "definition" : "L01XA01 - Cisplatin"
    },
    {
      "code" : "L01XA02",
      "display" : "carboplatin",
      "definition" : "L01XA02 - Carboplatin"
    },
    {
      "code" : "L01XA03",
      "display" : "oxaliplatin",
      "definition" : "L01XA03 - Oxaliplatin"
    },
    {
      "code" : "L01XG01",
      "display" : "bortezomib",
      "definition" : "L01XG01 - bortezomib"
    },
    {
      "code" : "L01XG02",
      "display" : "carfilzomib",
      "definition" : "L01XG02 - carfilzomib"
    },
    {
      "code" : "L01XG03",
      "display" : "ixazomib",
      "definition" : "L01XG03 - ixazomib"
    },
    {
      "code" : "L01XH",
      "display" : "Histone deacetylase (HDAC) inhibitors",
      "definition" : "L01XH - Histone deacetylase (HDAC) inhibitors",
      "concept" : [
        {
          "code" : "L01XH01",
          "display" : "vorinostat",
          "definition" : "L01XH01 - vorinostat"
        },
        {
          "code" : "L01XH03",
          "display" : "panobinostat",
          "definition" : "L01XH03 - panobinostat"
        }
      ]
    },
    {
      "code" : "L01XX05",
      "display" : "hydroxycarbamide",
      "definition" : "L01XX05 - hydroxycarbamide"
    },
    {
      "code" : "L01XX35",
      "display" : "anagrelide",
      "definition" : "L01XX35 - anagrelide"
    },
    {
      "code" : "L01XX52",
      "display" : "venetoclax",
      "definition" : "L01XX52 - venetoclax"
    },
    {
      "code" : "L03AB",
      "display" : "Interferons",
      "definition" : "L03AB - Interferons"
    },
    {
      "code" : "L04A",
      "display" : "IMMUNOSUPPRESSANTS",
      "definition" : "L04A - IMMUNOSUPPRESSANTS",
      "concept" : [
        {
          "code" : "L04AA",
          "display" : "Selective immunosuppressants",
          "definition" : "L04AA - Selective immunosuppressants",
          "concept" : [
            {
              "code" : "L04AA34",
              "display" : "alemtuzumab",
              "definition" : "L04AA34 - alemtuzumab"
            },
            {
              "code" : "L04AA40",
              "display" : "cladribine",
              "definition" : "L04AA40 - cladribine"
            }
          ]
        }
      ]
    },
    {
      "code" : "L04AD01",
      "display" : "ciclosporin",
      "definition" : "L04AD01 - ciclosporin"
    },
    {
      "code" : "L04AX02",
      "display" : "thalidomide",
      "definition" : "L04AX02 - thalidomide"
    },
    {
      "code" : "L04AX04",
      "display" : "lenalidomide",
      "definition" : "L04AX04 - lenalidomide"
    },
    {
      "code" : "L04AX06",
      "display" : "pomalidomide",
      "definition" : "L04AX06 - pomalidomide"
    },
    {
      "code" : "M05BA03",
      "display" : "pamidronic acid",
      "definition" : "M05BA03 - pamidronic acid"
    },
    {
      "code" : "M05BA08",
      "display" : "zoledronic acid",
      "definition" : "M05BA08 - zoledronic acid"
    },
    {
      "code" : "M05BX04",
      "display" : "denosumab",
      "definition" : "M05BX04 - denosumab"
    },
    {
      "code" : "S01LA08",
      "display" : "bevacizumab",
      "definition" : "S01LA08 - Bevacizumab"
    },
    {
      "code" : "V10X",
      "display" : "OTHER THERAPEUTIC RADIOPHARMACEUTICALS",
      "definition" : "V10X - OTHER THERAPEUTIC RADIOPHARMACEUTICALS",
      "concept" : [
        {
          "code" : "V10XA53",
          "display" : "tositumomab/iodine (131I) tositumomab",
          "definition" : "V10XA53 - tositumomab/iodine (131I) tositumomab"
        },
        {
          "code" : "V10XX02",
          "display" : "ibritumomab tiuxetan (90Y)",
          "definition" : "V10XX02 - ibritumomab tiuxetan (90Y)"
        }
      ]
    }
  ]
}

```
