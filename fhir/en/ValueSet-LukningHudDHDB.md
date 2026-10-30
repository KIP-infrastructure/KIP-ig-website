# Lukning af hud (DHDB) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lukning af hud (DHDB)**

## ValueSet: Lukning af hud (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LukningHudDHDB | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:LukningHudDHDB |

 
Lukning af hud (DHDB) 

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
  "id" : "LukningHudDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LukningHudDHDB",
  "version" : "2.27.1",
  "name" : "LukningHudDHDB",
  "title" : "Lukning af hud (DHDB)",
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
  "description" : "Lukning af hud (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "not_intracutaneous",
        "display" : "Sutur, ikke intrakutan"
      },
      {
        "code" : "intracutaneous",
        "display" : "Sutur, intrakutan"
      },
      {
        "code" : "surgical_staple",
        "display" : "Agraffer"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```
