# Interventionsforløb - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Interventionsforløb**

## CodeSystem: Interventionsforløb 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Interventionsforloeb | *Version*:2.17.1 |
| Active as of 2024-01-10 | *Computable Name*:Interventionsforloeb |

 
Interventionsforløb 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Interventionsforloeb](ValueSet-Interventionsforloeb.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Interventionsforloeb",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Interventionsforloeb",
  "version" : "2.17.1",
  "name" : "Interventionsforloeb",
  "title" : "Interventionsforløb",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "Interventionsforløb",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "HD",
      "display" : "Hæmodialyse",
      "definition" : "Hæmodialyse"
    },
    {
      "code" : "PD",
      "display" : "Peritonealdialyse",
      "definition" : "Peritonealdialyse"
    },
    {
      "code" : "TX",
      "display" : "Transplantation",
      "definition" : "Transplantation"
    }
  ]
}

```
