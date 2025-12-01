# Fisher grading scale - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fisher grading scale**

## CodeSystem: Fisher grading scale 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/FisherGradingScale | *Version*:2.14.2 |
| Active as of 2022-06-28 | *Computable Name*:FisherGradingScale |

 
Fisher grading scale; Link: https://radiopaedia.org/articles/fisher-scale 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FisherGrad](ValueSet-FisherGrad.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "FisherGradingScale",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/FisherGradingScale",
  "version" : "2.14.2",
  "name" : "FisherGradingScale",
  "title" : "Fisher grading scale",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Fisher grading scale; Link: https://radiopaedia.org/articles/fisher-scale",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "grade1",
      "display" : "Grade 1",
      "definition" : "Grade 1: No SAH detected"
    },
    {
      "code" : "grade2",
      "display" : "Grade 2",
      "definition" : "Grade 2: Diffuse or vertical layer of subarachnoid blood < 1mm thick"
    },
    {
      "code" : "grade3",
      "display" : "Grade 3",
      "definition" : "Grade 3: Localized clot and/or vertical layer within the subarachnoid space > 1mm thick"
    },
    {
      "code" : "grade4",
      "display" : "Grade 4",
      "definition" : "Grade 4: Intracerebral hemorrhage (ICH) or intraventricular hemorrhage (IVH) with diffuse or no SAH"
    }
  ]
}

```
