# Preoperativ templating - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Preoperativ templating**

## ValueSet: Preoperativ templating 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PreoperativTemplating | *Version*:2.27.2 |
| Active as of 2024-01-03 | *Computable Name*:PreoperativTemplating |

 
Preoperativ templating (DHR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "PreoperativTemplating",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PreoperativTemplating",
  "version" : "2.27.2",
  "name" : "PreoperativTemplating",
  "title" : "Preoperativ templating",
  "status" : "active",
  "date" : "2024-01-03T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Preoperativ templating (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PreoperativTemplating",
      "concept" : [{
        "code" : "digital_both",
        "display" : "Digital templating af begge komponenter"
      },
      {
        "code" : "digital_single",
        "display" : "Digital templating af en komponent"
      },
      {
        "code" : "analog",
        "display" : "Analog templating"
      }]
    }]
  }
}

```
