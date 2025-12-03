# Preoperativ templating - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Preoperativ templating**

## CodeSystem: Preoperativ templating 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/PreoperativTemplating | *Version*:2.15.0 |
| Active as of 2024-01-03 | *Computable Name*:PreoperativTemplating |

 
Preoperativ templating 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PreoperativTemplating](ValueSet-PreoperativTemplating.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "PreoperativTemplating",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/PreoperativTemplating",
  "version" : "2.15.0",
  "name" : "PreoperativTemplating",
  "title" : "Preoperativ templating",
  "status" : "active",
  "date" : "2024-01-03T00:00:00+02:00",
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
  "description" : "Preoperativ templating",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "analog",
      "display" : "Analog templating",
      "definition" : "Analog templating"
    },
    {
      "code" : "digital_both",
      "display" : "Digital templating af begge komponenter",
      "definition" : "Digital templating af begge komponenter"
    },
    {
      "code" : "digital_single",
      "display" : "Digital templating af en komponent",
      "definition" : "Digital templating af en komponent"
    }
  ]
}

```
