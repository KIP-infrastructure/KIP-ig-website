# Education Type - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Education Type**

## CodeSystem: Education Type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EducationType | *Version*:2.16.0 |
| Active as of 2023-09-05 | *Computable Name*:EducationType |

 
Education Type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Undervisning](ValueSet-Undervisning.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EducationType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EducationType",
  "version" : "2.16.0",
  "name" : "EducationType",
  "title" : "Education Type",
  "status" : "active",
  "date" : "2023-09-05T00:00:00+02:00",
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
  "description" : "Education Type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "onsite",
      "display" : "On site",
      "definition" : "Personligt fremmøde"
    },
    {
      "code" : "elearn",
      "display" : "e-learn",
      "definition" : "e-læring"
    }
  ]
}

```
