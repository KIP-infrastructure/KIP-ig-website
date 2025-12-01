# Alchohol - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Alchohol**

## CodeSystem: Alchohol 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Alchohol | *Version*:2.14.2 |
| Active as of 2022-05-31 | *Computable Name*:Alchohol |

 
Healthfactor alchohol 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Alkohol021](ValueSet-Alkohol021.md)
* [Alkohol0til10](ValueSet-Alkohol0til10.md)
* [Alkohol714](ValueSet-Alkohol714.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Alchohol",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Alchohol",
  "version" : "2.14.2",
  "name" : "Alchohol",
  "title" : "Alchohol",
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
  "description" : "Healthfactor alchohol",
  "content" : "complete",
  "count" : 7,
  "concept" : [
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Ingen alkohol"
    },
    {
      "code" : "le7/14",
      "display" : "7/14 genstande eller færre",
      "definition" : "Under eller lig 7/14 genstande per uge (kvinde/mand)"
    },
    {
      "code" : "gt7/14",
      "display" : "OVer 7/14 genstande",
      "definition" : "Over 7/14 genstande per uge (kvinde/mand)"
    },
    {
      "code" : "0-10",
      "display" : "0-10 genstande pr. uge",
      "definition" : "0-10 genstande pr. uge"
    },
    {
      "code" : "gte11",
      "display" : "Over 11 genstande pr. uge",
      "definition" : "Over 11 genstande pr. uge"
    },
    {
      "code" : "1-21",
      "display" : "1-21",
      "definition" : "1-21 genstande per uge"
    },
    {
      "code" : "gt21",
      "display" : ">21",
      "definition" : "Mere end 21 genstande per uge"
    }
  ]
}

```
