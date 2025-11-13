# Housing type - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Housing type**

## CodeSystem: Housing type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HousingType | *Version*:2.14.0 |
| Active as of 2022-06-21 | *Computable Name*:HousingType |

 
Housing type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BoligforholdRETSPSYK](ValueSet-BoligforholdRETSPSYK.md)
* [BoligformDAP](ValueSet-BoligformDAP.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HousingType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HousingType",
  "version" : "2.14.0",
  "name" : "HousingType",
  "title" : "Housing type",
  "status" : "active",
  "date" : "2022-06-21T00:00:00+02:00",
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
  "description" : "Housing type",
  "content" : "complete",
  "count" : 7,
  "concept" : [
    {
      "code" : "private",
      "display" : "Private",
      "definition" : "Private / Privat"
    },
    {
      "code" : "house/apartment",
      "display" : "Hus/lejlighed",
      "definition" : "Hus/lejlighed (privat bolig)"
    },
    {
      "code" : "nursinghome",
      "display" : "Plejebolig",
      "definition" : "Plejebolig"
    },
    {
      "code" : "own_residence",
      "display" : "Own residence",
      "definition" : "Own residence / Egen bolig"
    },
    {
      "code" : "institution",
      "display" : "Institution",
      "definition" : "Institution"
    },
    {
      "code" : "homeless",
      "display" : "Homeless",
      "definition" : "Homeless / Hjemløs"
    },
    {
      "code" : "other",
      "display" : "Andet",
      "definition" : "Andet"
    }
  ]
}

```
