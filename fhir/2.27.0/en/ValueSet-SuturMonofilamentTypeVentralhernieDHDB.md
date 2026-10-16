# Sutur monofilament type, ventralhernie (DHDB) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sutur monofilament type, ventralhernie (DHDB)**

## ValueSet: Sutur monofilament type, ventralhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SuturMonofilamentTypeVentralhernieDHDB | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:SuturMonofilamentTypeVentralhernieDHDB |

 
Sutur monofilament type, ventralhernie (DHDB) 

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
  "id" : "SuturMonofilamentTypeVentralhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SuturMonofilamentTypeVentralhernieDHDB",
  "version" : "2.27.0",
  "name" : "SuturMonofilamentTypeVentralhernieDHDB",
  "title" : "Sutur monofilament type, ventralhernie (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Sutur monofilament type, ventralhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "pds",
        "display" : "PDS"
      },
      {
        "code" : "maxon",
        "display" : "Maxon"
      },
      {
        "code" : "monoplus",
        "display" : "MonoPlus"
      },
      {
        "code" : "momomax",
        "display" : "MonoMax"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden type sutur"
      }]
    }]
  }
}

```
