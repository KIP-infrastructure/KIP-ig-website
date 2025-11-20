# Verdict - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Verdict**

## CodeSystem: Verdict 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Verdict | *Version*:2.14.1 |
| Active as of 2022-09-28 | *Computable Name*:Verdict |

 
Verdict 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DomAendringPauseringRETSPSYK](ValueSet-DomAendringPauseringRETSPSYK.md)
* [DomAfslutningRETSPSYK](ValueSet-DomAfslutningRETSPSYK.md)
* [DomAnbefalingRETSPSYK](ValueSet-DomAnbefalingRETSPSYK.md)
* [DomAnbringelseRETSPSYK](ValueSet-DomAnbringelseRETSPSYK.md)
* [DomBehandlingAmbulantRETSPSYK](ValueSet-DomBehandlingAmbulantRETSPSYK.md)
* [DomBehandlingRETSPSYK](ValueSet-DomBehandlingRETSPSYK.md)
* [DomForanstaltningstypeRETSPSYK](ValueSet-DomForanstaltningstypeRETSPSYK.md)
* [DomOphaevelseAarsagRETSPSYK](ValueSet-DomOphaevelseAarsagRETSPSYK.md)
* [DomPauseringAarsagRETSPSYK](ValueSet-DomPauseringAarsagRETSPSYK.md)
* [DomTidligereRETSPSYK](ValueSet-DomTidligereRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Verdict",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
  "version" : "2.14.1",
  "name" : "Verdict",
  "title" : "Verdict",
  "status" : "active",
  "date" : "2022-09-28T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Verdict",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 26,
  "concept" : [
    {
      "code" : "ordinary_penalty",
      "display" : "Almindelig straf",
      "definition" : "Almindelig straf"
    },
    {
      "code" : "placement_psychiatric_ward",
      "display" : "Dom til anbringelse i psykiatrisk afdeling",
      "definition" : "Dom til anbringelse i psykiatrisk afdeling"
    },
    {
      "code" : "placement_psychiatric_ward_etc",
      "display" : "Dom til anbringelse på psykiatrisk afdeling etc.",
      "definition" : "Dom til anbringelse på psykiatrisk afdeling etc."
    },
    {
      "code" : "placement_secure_ward",
      "display" : "Dom til anbringelse på sikringsafdelingen",
      "definition" : "Dom til anbringelse på sikringsafdelingen"
    },
    {
      "code" : "treatment",
      "display" : "Dom til behandling på psykiatrisk afdeling",
      "definition" : "Dom til behandling på psykiatrisk afdeling"
    },
    {
      "code" : "treatment_correctional",
      "display" : "Dom til behandling på psykiatrisk afdeling med tilsyn af Kriminalforsorgen",
      "definition" : "Dom til behandling på psykiatrisk afdeling med tilsyn af Kriminalforsorgen"
    },
    {
      "code" : "treatment_outpatient",
      "display" : "Dom til ambulant behandling ved psykiatrisk afdeling",
      "definition" : "Dom til ambulant behandling ved psykiatrisk afdeling"
    },
    {
      "code" : "treatment_outpatient_admission",
      "display" : "Dom til ambulant behandling ved psykiatrisk afdeling med mulighed for indlæggelse",
      "definition" : "Dom til ambulant behandling ved psykiatrisk afdeling med mulighed for indlæggelse"
    },
    {
      "code" : "treatment_outpatient_correctional",
      "display" : "Dom til ambulant behandling ved psykiatrisk afdeling med tilsyn af Kriminalforsorgen",
      "definition" : "Dom til ambulant behandling ved psykiatrisk afdeling med tilsyn af Kriminalforsorgen"
    },
    {
      "code" : "treatment_outpatient_correctional_admission",
      "display" : "Dom til ambulant behandling ved psykiatrisk afdeling med tilsyn af Kriminalforsorgen og mulighed for indlæggelse",
      "definition" : "Dom til ambulant behandling ved psykiatrisk afdeling med tilsyn af Kriminalforsorgen og mulighed for indlæggelse"
    },
    {
      "code" : "sustainment",
      "display" : "Sustainment",
      "definition" : "Sustainment / Opretholdelse"
    },
    {
      "code" : "extension_time",
      "display" : "Extension, time",
      "definition" : "Extension, time / Forlængelse af længstetid"
    },
    {
      "code" : "extension_measure",
      "display" : "Extension, measure",
      "definition" : "Extension, measure / Forlængelse af foranstaltning"
    },
    {
      "code" : "cancellation",
      "display" : "Cancellation",
      "definition" : "Cancellation / Ophævelse",
      "concept" : [
        {
          "code" : "criminality",
          "display" : "Dom ophæves pga. ny kriminalitet, men ingen ny foranstaltning",
          "definition" : "Dom ophæves pga. ny kriminalitet, men ingen ny foranstaltning"
        },
        {
          "code" : "criminality_measure",
          "display" : "Dom ophæves pga. ny kriminalitet og ny foranstaltning",
          "definition" : "Dom ophæves pga. ny kriminalitet og ny foranstaltning"
        },
        {
          "code" : "psychiatry",
          "display" : "Dom ophæves: patienten afsluttes til psykiatrien i sygehusregi eller egen læge",
          "definition" : "Dom ophæves: patienten afsluttes til psykiatrien i sygehusregi eller egen læge"
        },
        {
          "code" : "disease_expelled_travelled_missing",
          "display" : "Dom ophæves pga. alvorlig somatisk sygdom, udvist, udrejst eller forsvundet",
          "definition" : "Dom ophæves pga. alvorlig somatisk sygdom, udvist, udrejst eller forsvundet"
        },
        {
          "code" : "expire",
          "display" : "Dom ophæves / udløbet (ingen ny kriminalitet)",
          "definition" : "Dom ophæves / udløbet (ingen ny kriminalitet)"
        }
      ]
    },
    {
      "code" : "intensification",
      "display" : "Intesification",
      "definition" : "Intensification / Skærpelse"
    },
    {
      "code" : "relaxation",
      "display" : "Relaxation",
      "definition" : "Relaxation / Lempelse"
    },
    {
      "code" : "change",
      "display" : "Change of verdict",
      "definition" : "Change of verdict / Ændring af dom"
    },
    {
      "code" : "pause",
      "display" : "Pause of verdict",
      "definition" : "Pause of verdict / Pausering af dom",
      "concept" : [
        {
          "code" : "expelled",
          "display" : "Cause of pause: Expelled",
          "definition" : "Cause of pause: Expelled / Udvist"
        },
        {
          "code" : "travelled_away",
          "display" : "Cause of pause: Travelled away",
          "definition" : "Cause of pause: Travelled away / Udrejst"
        },
        {
          "code" : "missing",
          "display" : "Cause of pause: Missing",
          "definition" : "Cause of pause: Missing / Forsvundet"
        }
      ]
    }
  ]
}

```
