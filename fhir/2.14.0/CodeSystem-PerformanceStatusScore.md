# Performance Status score (ECOG/WHO/Zubrod) - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Performance Status score (ECOG/WHO/Zubrod)**

## CodeSystem: Performance Status score (ECOG/WHO/Zubrod) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/PerformanceStatusScore | *Version*:2.14.0 |
| Active as of 2022-05-31 | *Computable Name*:PerformanceStatusScore |

 
Score udviklet til performance for cancerpatienter. Kaldes både ECOG, WHO eller Zubrod. Link: https://ecog-acrin.org/resources/ecog-performance-status/ 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ECOG](ValueSet-ECOG.md)
* [ECOGHAEMA](ValueSet-ECOGHAEMA.md)
* [WHOPerformanceStatus04](ValueSet-WHOPerformanceStatus04.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "PerformanceStatusScore",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/PerformanceStatusScore",
  "version" : "2.14.0",
  "name" : "PerformanceStatusScore",
  "title" : "Performance Status score (ECOG/WHO/Zubrod)",
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
  "description" : "Score udviklet til performance for cancerpatienter. Kaldes både ECOG, WHO eller Zubrod. Link: https://ecog-acrin.org/resources/ecog-performance-status/",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "grade_0",
      "display" : "0",
      "definition" : "Fully active, able to carry on all pre-disease performance without restriction"
    },
    {
      "code" : "grade_1",
      "display" : "1",
      "definition" : "Restricted in physically strenuous activity but ambulatory and able to carry out work of a light or sedentary nature, e.g., light house work, office work"
    },
    {
      "code" : "grade_2",
      "display" : "2",
      "definition" : "Ambulatory and capable of all selfcare but unable to carry out any work activities; up and about more than 50% of waking hours"
    },
    {
      "code" : "grade_3",
      "display" : "3",
      "definition" : "Capable of only limited selfcare; confined to bed or chair more than 50% of waking hours"
    },
    {
      "code" : "grade_4",
      "display" : "4",
      "definition" : "Completely disabled; cannot carry on any selfcare; totally confined to bed or chair"
    },
    {
      "code" : "grade_5",
      "display" : "5",
      "definition" : "Dead"
    }
  ]
}

```
