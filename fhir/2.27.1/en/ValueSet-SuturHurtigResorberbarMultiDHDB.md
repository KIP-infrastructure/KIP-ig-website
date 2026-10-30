# Suturtype hurtig resorberbar multifilament ventralhernie (DHDB) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Suturtype hurtig resorberbar multifilament ventralhernie (DHDB)**

## ValueSet: Suturtype hurtig resorberbar multifilament ventralhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SuturHurtigResorberbarMultiDHDB | *Version*:2.27.1 |
| Active as of 2023-07-06 | *Computable Name*:SuturHurtigResorberbarMultiDHDB |

 
Suturtype hurtig resorberbar multifilament, ventralhernie (DHDB) 

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
  "id" : "SuturHurtigResorberbarMultiDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SuturHurtigResorberbarMultiDHDB",
  "version" : "2.27.1",
  "name" : "SuturHurtigResorberbarMultiDHDB",
  "title" : "Suturtype hurtig resorberbar multifilament ventralhernie (DHDB)",
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
  "description" : "Suturtype hurtig resorberbar multifilament, ventralhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "vicryl",
        "display" : "Vicryl"
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
