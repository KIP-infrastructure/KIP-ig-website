# Cement blandesystem (DHR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cement blandesystem (DHR)**

## ValueSet: Cement blandesystem (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CementBlandesystemDHR | *Version*:2.27.1 |
| Active as of 2022-11-07 | *Computable Name*:CementBlandesystemDHR |

 
Cement blandesystem (DHR) 

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
  "id" : "CementBlandesystemDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CementBlandesystemDHR",
  "version" : "2.27.1",
  "name" : "CementBlandesystemDHR",
  "title" : "Cement blandesystem (DHR)",
  "status" : "active",
  "date" : "2022-11-07T00:00:00+02:00",
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
  "description" : "Cement blandesystem (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "open_mixture",
        "display" : "Åben blanding af væske og pulver"
      },
      {
        "code" : "closed_mixture",
        "display" : "Fuldstændig lukket blanding af væske og pulver"
      }]
    }]
  }
}

```
