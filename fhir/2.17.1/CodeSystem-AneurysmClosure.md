# Aneurysm closure - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aneurysm closure**

## CodeSystem: Aneurysm closure 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AneurysmClosure | *Version*:2.17.1 |
| Active as of 2022-06-29 | *Computable Name*:AneurysmClosure |

 
Aneurysm closure - Degree of closure 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnurismeAflukning](ValueSet-AnurismeAflukning.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AneurysmClosure",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AneurysmClosure",
  "version" : "2.17.1",
  "name" : "AneurysmClosure",
  "title" : "Aneurysm closure",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Aneurysm closure - Degree of closure",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "full",
      "display" : "Full",
      "definition" : "Full closure"
    },
    {
      "code" : "partial",
      "display" : "Partial",
      "definition" : "partial closure"
    }
  ]
}

```
