# SOR: Afdelinger Universitetshospitaler (DNSL) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Afdelinger Universitetshospitaler (DNSL)**

## ValueSet: SOR: Afdelinger Universitetshospitaler (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SORAfdelingerUHDNSL | *Version*:2.27.3 |
| Active as of 2024-01-31 | *Computable Name*:SORAfdelingerUHDNSL |

 
SOR: Afdelinger Nyresvigt på nniversitetshospitaler (DNSL) 

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
  "id" : "SORAfdelingerUHDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SORAfdelingerUHDNSL",
  "version" : "2.27.3",
  "name" : "SORAfdelingerUHDNSL",
  "title" : "SOR: Afdelinger Universitetshospitaler (DNSL)",
  "status" : "active",
  "date" : "2024-01-31T00:00:00+02:00",
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
  "description" : "SOR: Afdelinger Nyresvigt på nniversitetshospitaler (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "252441000016006",
        "display" : "Rigshospitalet, Nefrologisk Klinik, P (252441000016006)"
      },
      {
        "code" : "239831000016009",
        "display" : "OUH Nyremedicinsk Afdeling Y (239831000016009)"
      },
      {
        "code" : "453111000016005",
        "display" : "Aarhus/Skejby, Nyresygdomme Overafdeling (453111000016005)"
      }]
    }]
  }
}

```
