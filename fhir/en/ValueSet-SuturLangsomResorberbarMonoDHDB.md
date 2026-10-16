# Suturtype langsom resorberbar monofilament ventralhernie (DHDB) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Suturtype langsom resorberbar monofilament ventralhernie (DHDB)**

## ValueSet: Suturtype langsom resorberbar monofilament ventralhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SuturLangsomResorberbarMonoDHDB | *Version*:2.27.0 |
| Active as of 2023-07-06 | *Computable Name*:SuturLangsomResorberbarMonoDHDB |

 
Suturtype langsom resorberbar monofilament, ventralhernie (DHDB) 

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
  "id" : "SuturLangsomResorberbarMonoDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SuturLangsomResorberbarMonoDHDB",
  "version" : "2.27.0",
  "name" : "SuturLangsomResorberbarMonoDHDB",
  "title" : "Suturtype langsom resorberbar monofilament ventralhernie (DHDB)",
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
  "description" : "Suturtype langsom resorberbar monofilament, ventralhernie (DHDB)",
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
        "code" : "monomax",
        "display" : "Monomax"
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
