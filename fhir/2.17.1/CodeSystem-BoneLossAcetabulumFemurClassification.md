# Bone loss - Acetabulum Femur Classification - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Bone loss - Acetabulum Femur Classification**

## CodeSystem: Bone loss - Acetabulum Femur Classification 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/BoneLossAcetabulumFemurClassification | *Version*:2.17.1 |
| Active as of 2022-10-06 | *Computable Name*:BoneLossAcetabulumFemurClassification |

 
Walch classification; Link: https://radiopaedia.org/articles/walch-classification-of-glenoid-morphology-1 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AcetabulumKnogletabKlassifikationDHR](ValueSet-AcetabulumKnogletabKlassifikationDHR.md)
* [FemurKnogletabKlassifikationDHR](ValueSet-FemurKnogletabKlassifikationDHR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "BoneLossAcetabulumFemurClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/BoneLossAcetabulumFemurClassification",
  "version" : "2.17.1",
  "name" : "BoneLossAcetabulumFemurClassification",
  "title" : "Bone loss - Acetabulum Femur Classification",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Walch classification; Link: https://radiopaedia.org/articles/walch-classification-of-glenoid-morphology-1",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 11,
  "concept" : [
    {
      "code" : "acetabulum_type_1",
      "display" : "Type I: Intet væsentligt knogletab",
      "definition" : "Type I: Intet væsentligt knogletab"
    },
    {
      "code" : "acetabulum_type_2",
      "display" : "Type II: Contained knogletab (intakt rim)",
      "definition" : "Type II: Contained knogletab (intakt rim)"
    },
    {
      "code" : "acetabulum_type_3",
      "display" : "Type III: Ikke contained segmentel knogletab",
      "definition" : "Type III: Ikke contained segmentel knogletab"
    },
    {
      "code" : "acetabulum_type_4",
      "display" : "Type IV: Ikke contained segmentelt knogletab involverende mere end 50% af acetabulum",
      "definition" : "Type IV: Ikke contained segmentelt knogletab involverende mere end 50% af acetabulum"
    },
    {
      "code" : "acetabulum_type_5",
      "display" : "Type V: Knogletab med discontinuitet af acetabulum",
      "definition" : "Type V: Knogletab med discontinuitet af acetabulum"
    },
    {
      "code" : "femur_type_1",
      "display" : "Type I: Intet væsentligt knogletab",
      "definition" : "Type I: Intet væsentligt knogletab"
    },
    {
      "code" : "femur_type_2",
      "display" : "Type II: Contained knogletab med cortikal udtynding",
      "definition" : "Type II: Contained knogletab med cortikal udtynding"
    },
    {
      "code" : "femur_type_3",
      "display" : "Type III: Ikke contained knogletab involverende calcar og trochanter minor med perforation af cortex",
      "definition" : "Type III: Ikke contained knogletab involverende calcar og trochanter minor med perforation af cortex"
    },
    {
      "code" : "femur_type_4",
      "display" : "Type IV: Ikke contained knogletab gående ned i diafysen",
      "definition" : "Type IV: Ikke contained knogletab gående ned i diafysen"
    },
    {
      "code" : "femur_type_5",
      "display" : "Type V: Fraktur omkring femurstemmet med circumferentielt knogletab svarende til type IV",
      "definition" : "Type V: Fraktur omkring femurstemmet med circumferentielt knogletab svarende til type IV"
    },
    {
      "code" : "femur_type_6",
      "display" : "Type VI: Fraktur omkring femurstemmet med knogletab svarende til type I-III",
      "definition" : "Type VI: Fraktur omkring femurstemmet med knogletab svarende til type I-III"
    }
  ]
}

```
