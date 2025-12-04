# Binet staging system for Chroniz Lymphocytic Leukemia - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Binet staging system for Chroniz Lymphocytic Leukemia**

## CodeSystem: Binet staging system for Chroniz Lymphocytic Leukemia 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/BinetStagingSystem | *Version*:2.16.0 |
| Active as of 2022-05-31 | *Computable Name*:BinetStagingSystem |

 
Stages chronic lymphocytic leukemia, similar to Rai Staging System. *Nodal areas: cervical, axillary, inguinal (one side or both), spleen, and liver. Link: https://www.mdcalc.com/calc/10053/binet-staging-system-chronic-lymphocytic-leukemia-cll 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BinetStagingSystem](ValueSet-BinetStagingSystem.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "BinetStagingSystem",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/BinetStagingSystem",
  "version" : "2.16.0",
  "name" : "BinetStagingSystem",
  "title" : "Binet staging system for Chroniz Lymphocytic Leukemia",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Stages chronic lymphocytic leukemia, similar to Rai Staging System. *Nodal areas: cervical, axillary, inguinal (one side or both), spleen, and liver. Link: https://www.mdcalc.com/calc/10053/binet-staging-system-chronic-lymphocytic-leukemia-cll",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "stage_a",
      "display" : "A",
      "definition" : "Stage A: <3 areas of lymphadenopathy*, and normal hemoglobin and platelet count"
    },
    {
      "code" : "stage_b",
      "display" : "B",
      "definition" : "≥3 areas of lymphadenopathy*, and normal hemoglobin and platelet count"
    },
    {
      "code" : "stage_c",
      "display" : "C",
      "definition" : "Anemia (Hgb <10 g/dL) and/or thrombocytopenia (platelets <100,000/mm³), regardless of number of areas of lymphadenopathy"
    }
  ]
}

```
