# Hernia size - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hernia size**

## CodeSystem: Hernia size 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HerniaSize | *Version*:2.14.1 |
| Active as of 2022-06-14 | *Computable Name*:HerniaSize |

 
Hernia size 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HernieStoerrelse](ValueSet-HernieStoerrelse.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HerniaSize",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HerniaSize",
  "version" : "2.14.1",
  "name" : "HerniaSize",
  "title" : "Hernia size",
  "status" : "active",
  "date" : "2022-06-14T00:00:00+02:00",
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
  "description" : "Hernia size",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "<1",
      "display" : "<1 finger",
      "definition" : "<1 finger / <1 finger"
    },
    {
      "code" : "1",
      "display" : "1 finger",
      "definition" : "1 finger"
    },
    {
      "code" : "2",
      "display" : "2 fingers",
      "definition" : "2 fingers / 2 fingre"
    },
    {
      "code" : ">=3",
      "display" : ">=3 fingers",
      "definition" : ">=3 fingers / >=3 fingre"
    }
  ]
}

```
