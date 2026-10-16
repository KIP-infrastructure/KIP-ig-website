# Peritonealdefekt lukning (DHDB) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Peritonealdefekt lukning (DHDB)**

## ValueSet: Peritonealdefekt lukning (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PeritonealdefektLukningDHDB | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:PeritonealdefektLukningDHDB |

 
Peritonealdefekt lukning (DHDB) 

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
  "id" : "PeritonealdefektLukningDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PeritonealdefektLukningDHDB",
  "version" : "2.27.0",
  "name" : "PeritonealdefektLukningDHDB",
  "title" : "Peritonealdefekt lukning (DHDB)",
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
  "description" : "Peritonealdefekt lukning (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "suture",
        "display" : "Sutur"
      },
      {
        "code" : "tack",
        "display" : "Tackers"
      },
      {
        "code" : "clip",
        "display" : "Clips"
      },
      {
        "code" : "surgical_glue",
        "display" : "Lim"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "NA",
        "display" : "Ikke relevant (TEP-indgreb)"
      }]
    }]
  }
}

```
