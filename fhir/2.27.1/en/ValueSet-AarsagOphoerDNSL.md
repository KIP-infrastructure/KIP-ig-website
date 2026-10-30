# Årsag til ophør (DNSL) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Årsag til ophør (DNSL)**

## ValueSet: Årsag til ophør (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AarsagOphoerDNSL | *Version*:2.27.1 |
| Active as of 2024-01-10 | *Computable Name*:AarsagOphoerDNSL |

 
Årsager til interventionsforløb er ophørt 

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
  "id" : "AarsagOphoerDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AarsagOphoerDNSL",
  "version" : "2.27.1",
  "name" : "AarsagOphoerDNSL",
  "title" : "Årsag til ophør (DNSL)",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "Årsager til interventionsforløb er ophørt",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BehandlingAfbrudt",
      "concept" : [{
        "code" : "transplant",
        "display" : "Transplantation"
      },
      {
        "code" : "peritonitis",
        "display" : "Peritonitis"
      },
      {
        "code" : "ultrafilt_svigt",
        "display" : "Ultrafiltrationssvigt"
      },
      {
        "code" : "inadekvat_dialyse",
        "display" : "Inadekvat dialyse"
      },
      {
        "code" : "hernia",
        "display" : "Hernia (inkl Diafragma)"
      },
      {
        "code" : "teknisk",
        "display" : "Teknisk (fx kateterproblem)"
      },
      {
        "code" : "anden_medicinsk",
        "display" : "Andre medicinske årsager (fx apopleksi)"
      },
      {
        "code" : "patient_valg",
        "display" : "Patient valg"
      },
      {
        "code" : "socialt",
        "display" : "Socialt"
      },
      {
        "code" : "abdominal_op",
        "display" : "Abdominal operation"
      }]
    }]
  }
}

```
