# Dialyseadgang ved første dialyse (DNSL) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dialyseadgang ved første dialyse (DNSL)**

## ValueSet: Dialyseadgang ved første dialyse (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DialyseadgangDNSL | *Version*:2.27.1 |
| Active as of 2024-01-10 | *Computable Name*:DialyseadgangDNSL |

 
Dialyseadgang ved første dialyse 

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
  "id" : "DialyseadgangDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DialyseadgangDNSL",
  "version" : "2.27.1",
  "name" : "DialyseadgangDNSL",
  "title" : "Dialyseadgang ved første dialyse (DNSL)",
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
  "description" : "Dialyseadgang ved første dialyse",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Dialyseadgang",
      "concept" : [{
        "code" : "av_fistel",
        "display" : "AV fistel"
      },
      {
        "code" : "hd_permanent",
        "display" : "Permanent HD kateter som patientens blivende adgang"
      },
      {
        "code" : "hd_temp",
        "display" : "Midlertidig HD kateter"
      },
      {
        "code" : "hd_permanent_av",
        "display" : "Permanent HD kateter, hvor der planlægges senere AV fistel"
      }]
    }]
  }
}

```
