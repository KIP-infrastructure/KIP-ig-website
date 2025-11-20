# Referred from - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Referred from**

## CodeSystem: Referred from 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ReferredFrom | *Version*:2.14.1 |
| Active as of 2022-08-23 | *Computable Name*:ReferredFrom |

 
Referred from 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HenvistFra](ValueSet-HenvistFra.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ReferredFrom",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ReferredFrom",
  "version" : "2.14.1",
  "name" : "ReferredFrom",
  "title" : "Referred from",
  "status" : "active",
  "date" : "2022-08-23T00:00:00+02:00",
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
  "description" : "Referred from",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "own_doctor",
      "display" : "Own doctor",
      "definition" : "Own doctor / Egen læge"
    },
    {
      "code" : "specialist_doctor",
      "display" : "Specialist doctor",
      "definition" : "Specialist doctor / Speciallæge"
    },
    {
      "code" : "hospital_department",
      "display" : "Hospital department",
      "definition" : "Hospital department / Sygehusafdeling"
    },
    {
      "code" : "palliative_department",
      "display" : "Palliative department",
      "definition" : "Palliative department / Palliativ enhed"
    },
    {
      "code" : "patient_relavtives",
      "display" : "Patient or relatives",
      "definition" : "Patient or relatives / Patienten selv eller pårørende"
    }
  ]
}

```
