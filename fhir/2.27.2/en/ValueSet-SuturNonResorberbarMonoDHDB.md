# Suturtype non-resorberbar monofilament ventralhernie (DHDB) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Suturtype non-resorberbar monofilament ventralhernie (DHDB)**

## ValueSet: Suturtype non-resorberbar monofilament ventralhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SuturNonResorberbarMonoDHDB | *Version*:2.27.2 |
| Active as of 2023-07-06 | *Computable Name*:SuturNonResorberbarMonoDHDB |

 
Suturtype non-resorberbar monofilament, ventralhernie (DHDB) 

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
  "id" : "SuturNonResorberbarMonoDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SuturNonResorberbarMonoDHDB",
  "version" : "2.27.2",
  "name" : "SuturNonResorberbarMonoDHDB",
  "title" : "Suturtype non-resorberbar monofilament ventralhernie (DHDB)",
  "status" : "active",
  "date" : "2023-07-06T00:00:00+02:00",
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
  "description" : "Suturtype non-resorberbar monofilament, ventralhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "prolene",
        "display" : "Prolene"
      },
      {
        "code" : "nylon",
        "display" : "Nylon"
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
