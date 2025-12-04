# Pupil condition - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pupil condition**

## CodeSystem: Pupil condition 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/PupilCondition | *Version*:2.16.0 |
| Active as of 2022-05-31 | *Computable Name*:PupilCondition |

 
Pupil condition 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Pupilforhold](ValueSet-Pupilforhold.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "PupilCondition",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/PupilCondition",
  "version" : "2.16.0",
  "name" : "PupilCondition",
  "title" : "Pupil condition",
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
  "description" : "Pupil condition",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "normal",
      "display" : "Normal",
      "definition" : "Normal"
    },
    {
      "code" : "difference",
      "display" : "Pupil difference",
      "definition" : "Pupil difference"
    }
  ]
}

```
