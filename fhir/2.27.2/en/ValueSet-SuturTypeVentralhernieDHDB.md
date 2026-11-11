# Sutur type, ventralhernie (DHDB) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sutur type, ventralhernie (DHDB)**

## ValueSet: Sutur type, ventralhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SuturTypeVentralhernieDHDB | *Version*:2.27.2 |
| Active as of 2022-07-20 | *Computable Name*:SuturTypeVentralhernieDHDB |

 
Sutur type, ventralhernie (DHDB) 

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
  "id" : "SuturTypeVentralhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SuturTypeVentralhernieDHDB",
  "version" : "2.27.2",
  "name" : "SuturTypeVentralhernieDHDB",
  "title" : "Sutur type, ventralhernie (DHDB)",
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
  "description" : "Sutur type, ventralhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "multifilament",
        "display" : "Multifilament"
      },
      {
        "code" : "monofilament",
        "display" : "Monofilament"
      }]
    }]
  }
}

```
